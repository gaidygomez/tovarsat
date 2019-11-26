<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function meridapost(Request $request)
    {
        $ci = $request->get('ci');

        $validator = Validator::make($request->all(), [
            'ci' => 'numeric|digits_between:7,8',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('ci', 'Los números de su cédula exceden los 8 dígitos, o son menor de 7 dígitos.');
        }else{
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

   public function tovarpost (Request $request)
   {
        $ci = $request->get('ci');

        $validator = Validator::make($request->all(), [
            'ci' => 'numeric|digits_between:7,8',
        ]);
        
        if ($validator->fails()) {
            return back()
                ->with('ci', 'Los números de su cédula exceden los 8 dígitos, o son menos de 7 dígitos.');
        } else {
            $user = DB::connection('avatar_tov')
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
}
