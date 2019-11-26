<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BanksController extends Controller
{
    public function bp(){

        $banco = Bank::find(6);

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
                return view('banks.provincial')->with('provincial', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.provincial')->with('provincial', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }

    public function bdv(){
        $ci = auth()->user()->ci;

        $banco = Bank::find(3);

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
                return view('banks.venezuela')->with('bdv', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.venezuela')->with('bdv', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }

    public function mm(){
        $ci = auth()->user()->ci;

        $banco = Bank::find(4);

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
                return view('banks.mercantilmerida')->with('mercantil', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.mercantilmerida')->with('mercantil', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }

    public function mt(){
        $ci = auth()->user()->ci;

        $banco = Bank::find(5);

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
                return view('banks.mercantiltovar')->with('mercantil', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.mercantiltovar')->with('mercantil', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }

    public function bs(){
        $ci = auth()->user()->ci;

        $banco = Bank::find(2);

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
                return view('banks.sofitasa')->with('sofitasa', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.sofitasa')->with('sofitasa', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }

    public function banesco(){

        $banco = Bank::find(1);

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
                return view('banks.banesco')->with('banesco', $banco);
            } else {
                return view('user.nopagar');
            }
        } else {
            if ($deuda->first()->notsaldo != 0) {
                return view('banks.banesco')->with('banesco', $banco);
            } else {
                return view('user.nopagar');
            }
        }
    }
}
