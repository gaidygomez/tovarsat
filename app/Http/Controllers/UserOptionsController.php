<?php

namespace App\Http\Controllers;

use DB;
use App\Payment;
use Illuminate\Support\Carbon;

use Barryvdh\DomPDF\Facade as PDF;

class UserOptionsController extends Controller
{

    public function debt(){
        $ci = auth()->user()->ci;

        $date = Carbon::now()->subMonth()->day(1); //Dejar el subMonth( para obtener la fecha del mes anterior.
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

            $monto_tov = $saldo_tov->pluck('notsaldo');

            return view('user.saldo')
                ->with('saldo_tovar', $saldo_tov)
                ->with('monto_tovar', $monto_tov);
            
        }else{

            $monto = $saldo->pluck('notsaldo');

            return view('user.saldo')
                ->with('saldo_merida', $saldo)
                ->with('monto', $monto);
        }
    }

    public function pay(){
        $ci = auth()->user()->ci;

        $date = Carbon::now()->subMonth()->day(1); // Este sí debe ir para calcular la deuda. Ya que se calcula con el mes anterior, es decir, subMonth().
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

    public function history(){

        $pagos = auth()->user()->payments()->orderBy('date', 'DESC')->paginate(10);

        return view('user.historico')->with('saldos', $pagos);
    }

    public function invoice (Payment $id){

        $user = auth()->user()->ci;

        $data = DB::connection('avatar')
            ->table('dbo.clientes')
            ->select('Nombre1', 'Apellido1', 'Cedula', 'Num_Cliente')
            ->where('Cedula', '=', "$user", 'and')
            ->get();

        if (isset($data->first()->Cedula) == null) {

            $data_tov = DB::connection('avatar_tov')
                ->table('dbo.clientes')
                ->select('Nombre1', 'Apellido1', 'Cedula', 'Num_Cliente')
                ->where('Cedula', '=', "$user", 'and')
                ->get();
            
            return view('user.invoice')
                ->with('invoice', $id)
                ->with('data_tov', $data_tov);
        }else{
            return view('user.invoice')->with('invoice', $id)->with('data', $data);
        }
    }

    public function print(Payment $id){
        
        $user = auth()->user()->ci;

        $data = DB::connection('avatar')
            ->table('dbo.clientes')
            ->select('Nombre1', 'Apellido1', 'Cedula', 'Num_Cliente')
            ->where('Cedula', '=', "$user", 'and')
            ->get();

        if (isset($data->first()->Cedula) == null) {

            $data_tov = DB::connection('avatar_tov')
                ->table('dbo.clientes')
                ->select('Nombre1', 'Apellido1', 'Cedula', 'Num_Cliente')
                ->where('Cedula', '=', "$user", 'and')
                ->get();

            $pdf_tov = PDF::loadView('user.pdf.print', compact('id', 'data_tov'));
            
            return $pdf_tov->stream('invoice.pdf');
        } else {
            $pdf = PDF::loadView('user.pdf.print', compact('id', 'data'));

            return $pdf->stream('invoice.pdf');
        }
    }

    public function search(){
        
        $user = auth()->user()->id;

        $results = auth()->user()->payments()
            ->where('brn', 'like', '%' . request()->hotSearch . '%')
            ->orWhere('bank', 'like', '%' . request()->hotSearch . '%')
            ->orWhere('comment', 'like', '%' . request()->hotSearch . '%')
            ->orWhere('date', 'like', '%'. request()->hotSearch . '%')
            ->orWhere('amount', 'like', '%' . request()->hotSearch . '%', 'and')
            ->where('user_id', '=', "$user")
            ->orderByDesc('created_at')
            ->take(10)
            ->get();

        return response()->json($results);
    }

    public function index(){
        return view('user.buscar');
    }
}
