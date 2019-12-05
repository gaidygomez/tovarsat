<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Carbon;
use App\Http\Requests\AdmRegisterRequest;
use App\User;
use App\Payment;
use App\Bank;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function show()
    {
        $users = User::where('id','!=',1)->orderBy('name', 'asc')->paginate(10);

        return view('admin.listuser', compact('users'));
    }

    public function register(){
        return view('admin.registrar');
    }

    public function postRegister(AdmRegisterRequest $request){
        
        if ($request->role == 'Usuario') {
            
            User::create([
                'name' => $request['name'],
                'ci' => $request['ci'],
                'email' => $request['email'],
                'role' => 1,
                'password' => Hash::make($request['password']),
            ]);

            return back()->with('crear', 'El Usuario fue creado exitosamente');
        } else {

            User::create([
                'name' => $request['name'],
                'ci' => $request['ci'],
                'email' => $request['email'],
                'role' => 0,
                'password' => Hash::make($request['password']),
            ]);

            return back()->with('crear', 'El Usuario fue creado exitosamente');
        }
    }

    public function listpay()
    {
        $pagos = User::where('id', '<>', 1)->with('payments')->get();

        return view('admin.pagos', compact('pagos'));
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'pagos-del-mes-pagina.xlsx');
    }
}
