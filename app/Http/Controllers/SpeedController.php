<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpeedController extends Controller
{
    public function index ()
    {
        return redirect()->away('http://172.16.10.55/speedtest/index.html');
    }
}
