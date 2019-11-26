<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $connection = 'pgsql';

    protected $table = "banks";

    protected $fillable = [
        'BRN', 'name'
    ];

    public function payments(){
        $this->hasMany(Payment::class, 'bank_id');
    }
}
