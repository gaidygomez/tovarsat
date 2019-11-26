<?php

namespace App\Http\Controllers;

use DB;
use App\Payment;
use App\User;
use App\Bank;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade as PDF;

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

    public function history(){

        $pagos = auth()->user()->payments()->orderBy('created_at', 'DESC')->paginate(8);

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

//     public function search(){
        
//   /* Entiendase que resquest() es un helper tambien puedes usar
//    * el típico $request.
//   */
//         $results = auth()->user()->payments()
//             ->where(function ($query) {
//                 $query->where('brn', 'like', '%' . request()->search . '%')
//                     ->orWhere('bank', 'like', '%' . request()->search . '%')
//                     ->orWhere('comment', 'like', '%' . request()->search . '%');
//         })->get();

//         return view('user.historico', compact('results'));

//     }
}
