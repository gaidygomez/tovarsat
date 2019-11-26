<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $connection = 'pgsql';

    protected $table = "payments";

    protected $fillable = [
        'amount', 'brn', 'bank', 'comment', 'user_id', 'bank_id'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
