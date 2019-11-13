<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class UserOptionsController extends Controller
{
    public function debt(){
        $ci = auth()->user()->ci;

        $date = Carbon::now()->subMonth()->day(1);
        $date = $date->format('Ymd');

        $saldo = DB::connection('avatar')
            ->table('dbo.notasmensuales')
            ->join('dbo.clientes', 'dbo.clientes.Num_Cliente', '=', 'dbo.notasmensuales.Num_Cliente')
            ->select('Nombre1', 'Apellido1', 'Cedula', 'numcuenta', 'notobservacion', 'notsaldo', 'nottotmonto', 'notfching')
            ->where('notfching', '=', "$date", 'and')
            ->where('Cedula', '=', "$ci",'and')
            ->get();
        
        if (isset($saldo->first()->Cedula) == null ) {
            
            $saldo_tov = DB::connection('avatar_tov')
                ->table('dbo.notasmensuales')
                ->join('dbo.clientes', 'dbo.clientes.Num_Cliente', '=', 'dbo.notasmensuales.Num_Cliente')
                ->select('Nombre1', 'Apellido1', 'Cedula', 'numcuenta', 'notobservacion', 'notsaldo', 'nottotmonto', 'notfching')
                ->where('notfching', '=', "$date", 'and')
                ->where('Cedula', '=', "$ci", 'and')
                ->get();
            
            return view('user.saldo')->with('saldo_tovar', $saldo_tov);
            
        }else{

            return view('user.saldo')->with('saldo_merida', $saldo);

        }
    }
}
