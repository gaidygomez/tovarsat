<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BanksFormRequest;
use App\Http\Requests\ProvincialFormRequest;
use App\Payment;
use App\Bank;

class BankPostController extends Controller
{
    public function banescopost(BanksFormRequest $request){
        
        $userId = auth()->user()->id;
        $bankId = Bank::find(1);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }

    public function bp(ProvincialFormRequest $request)
    {

        $userId = auth()->user()->id;
        $bankId = Bank::find(6);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }
    
    public function bs(BanksFormRequest $request){

        $userId = auth()->user()->id;
        $bankId = Bank::find(2);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }
    
    public function bdv(BanksFormRequest $request){

        $userId = auth()->user()->id;
        $bankId = Bank::find(3);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }

    public function mm(BanksFormRequest $request){

        $userId = auth()->user()->id;
        $bankId = Bank::find(4);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }
    
    public function mt(BanksFormRequest $request){

        $userId = auth()->user()->id;
        $bankId = Bank::find(5);

        Payment::create([
            'amount' => $request[('amount')],
            'bank' => $request[('bank')],
            'brn' => $request[('brn')],
            'comment' => $request[('comment')],
            'file' => $request->file('file')->store('pagos'),
            'date' => $request[('date')],
            'user_id' => $userId,
            'bank_id' => $bankId['id']
        ]);

        return view('user.ppagos');
    }
}
