<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert([
            'name' => 'Banesco',
            'brn' => '01340209402091013047',
        ]);

        DB::table('banks')->insert([
            'name' => 'Banco Sofitasa',
            'brn' => '01370025770000005801',
        ]);
        
        DB::table('banks')->insert([
            'name' => 'Banco de Venezuela',
            'brn' => '01020151950000042518',
        ]);
        
        DB::table('banks')->insert([
            'name' => 'Banco Mercantil - Mérida',
            'brn' => '01050747291747033693',
        ]);
        
        DB::table('banks')->insert([
            'name' => 'Banco Mercantil - Tovar',
            'brn' => '01050239051239003811',
        ]);
        
        DB::table('banks')->insert([
            'name' => 'Banco Provincial',
            'brn' => '01080115020100022988',
        ]);
    }
}
