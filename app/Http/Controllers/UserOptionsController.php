<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class UserOptionsController extends Controller
{
    public function debt(){
        $ci = auth()->user()->ci;

        $date = Carbon::now()->subMonth()->day(1); //Deshacer el subMonth() para obtener la fecha del mes actual.
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

    public function pay(){
        $ci = auth()->user()->ci;

        $date = Carbon::now()->subMonth()->day(1); // Este sí debe ir para calcular la deuda. Ya que se calcula con el mes anterior.
        $date = $date->format('Ymd');

        $deuda = DB::connection('avatar')
            ->table('dbo.notasmensuales')
            ->join('dbo.clientes', 'dbo.clientes.Num_Cliente', '=', 'dbo.notasmensuales.Num_Cliente')
            ->select('Nombre1', 'Apellido1', 'Cedula', 'numcuenta', 'notobservacion', 'notsaldo', 'nottotmonto', 'notfching')
            ->where('notfching', '=', "$date", 'and')
            ->where('Cedula', '=', "$ci", 'and')
            ->get();

        if (isset($deuda->first()->Cedula) == null) {

            $deuda_tov = DB::connection('avatar_tov')
                ->table('dbo.notasmensuales')
                ->join('dbo.clientes', 'dbo.clientes.Num_Cliente', '=', 'dbo.notasmensuales.Num_Cliente')
                ->select('Nombre1', 'Apellido1', 'Cedula', 'numcuenta', 'notobservacion', 'notsaldo', 'nottotmonto', 'notfching')
                ->where('notfching', '=', "$date", 'and')
                ->where('Cedula', '=', "$ci", 'and')
                ->get();

            if ($deuda_tov->first()->notsaldo != 0) {
                return view('user.pagotovar');
            } else {
                return view('user.nopagar');
            }
            
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('user.pagomerida');
            } else {
                return view('user.nopagar');
            }
        }
        

    }
}
