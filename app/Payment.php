<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'pgsql';

    protected $table = "payments";

    public function users(){
        $this->belongsTo('App\User');
    }

    public function banks(){
        $this->belongsToMany('App\Bank');
    }
}
