<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{

    use Exportable;

    public function view(): View
    {
        return view('exports', [
            'pagos' => User::where('id', '<>', 1)->with('payments')->get()
        ]);
    }
}
