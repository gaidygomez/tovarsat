<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Avatar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function show()
    {

        $users = DB::connection('avatar')
            ->table('dbo.notasmensuales')
            ->join('dbo.clientes', 'dbo.clientes.Num_Cliente', '=', 'dbo.notasmensuales.Num_Cliente')
            ->select('Nombre1', 'Apellido1', 'Cedula', 'numcuenta', 'notobservacion', 'notsaldo', 'nottotmonto')
            ->where('notfching', '=', '20191001', 'and')
            ->where('notsaldo', '=', '0')
            ->get();

    	dd($users);
        //return view('admin.listuser', ['users' => $users]);
    }
}
