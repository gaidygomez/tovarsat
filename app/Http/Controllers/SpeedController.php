<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function index ()
    {
        return redirect()->away('http://www.tovarsat.com.ve/speedtest/index.html');
    }
}
