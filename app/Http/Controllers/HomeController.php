<?php

namespace App\Http\Controllers;

use App\Payment;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $users = User::where('id', '<>', 1)->count();

        $payment = Payment::count();

        $pendiente = Payment::where('status', '=', 0)->count();

        $hechos = Payment::where('status', '=', 1)->count();

        $reject = Payment::where('status', '=', 2)->count();

        return view('admin.dashadmin', compact('users', 'payment', 'pendiente', 'hechos', 'reject'));
    }
}
