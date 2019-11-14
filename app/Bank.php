<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $connection = 'pgsql';

    protected $table = "banks";

    public function payments(){
        $this->belongsToMany('App\Payment');
    }
}
