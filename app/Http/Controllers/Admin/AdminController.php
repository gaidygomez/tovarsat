<?php

namespace App\Http\Controllers\Admin;

use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\AdmRegisterRequest;
use App\Payment;
use App\User;
use Illuminate\Support\Facades\Hash;
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

    public function editUser(User $id){
        return view('admin.edituser')->with('user', $id);
    }

    public function editUserUpdate(User $id, AdmRegisterRequest $request){

        if (request('role') == 'Usuario') {
            $id->update([
                'name' => $request['name'],
                'ci' => $request['ci'],
                'email' => $request['email'],
                'role' => 1,
                'password' => Hash::make($request['password']),
            ]);

            return redirect('listuser')->with('msg', 'El Usuario fue actualizado.');
        } else {
            $id->update([
                'name' => $request['name'],
                'ci' => $request['ci'],
                'email' => $request['email'],
                'role' => 0,
                'password' => Hash::make($request['password']),
            ]);

            return redirect('listuser')->with('msg', 'El Usuario fue actualizado.');
        }
    }

    public function deleteUser(User $id){
        
        $id->delete();

        return redirect('listuser')->with('delete', 'El Usuario fue eliminado');
    }

    public function approve($id){
       
        $pago = Payment::find($id);
        $pago->status = 1;
        $pago->save();

       return back()->with('approved', 'El Pago fue APROBADO');
    }

    public function rejected($id){
        $pago = Payment::find($id);
        $pago->status = 2;
        $pago->save();

        return back()->with('rejected', 'El Pago fue RECHAZADO');
    }
}
