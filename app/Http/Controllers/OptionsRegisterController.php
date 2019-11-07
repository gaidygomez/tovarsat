<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Carbon;

class OptionsRegisterController extends Controller
{
    public function index()
    {
        return view ('options');
    }

    public function tovarsearch()
    {
        return view ('tovarsearch');
    }
    
    public function meridasearch()
    {
        return view ('meridasearch');
    }

    public function tovarsearchpost(Request $request)
    {
        $ci = $request->get('ci');
        
        $user = DB::connection('avatar')
            ->table('dbo.clientes')
            ->select('Cedula', 'Nombre1', 'Apellido1')
            ->where('Cedula', 'LIKE', "%$ci%")
            ->get();

        if (isset($user->first()->Cedula) == null) {
            return back()->with('alert', 'Su cédula no se encuentra en nuestros registros.');
        } else {
            return redirect('register')
                ->with(["ci" => $ci])
                ->with(["name" => $user->first()->Nombre1])
                ->with(["apellido" => $user->first()->Apellido1]);
        }
   }
}
