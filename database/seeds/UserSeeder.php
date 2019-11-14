<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@tovarsat.com.ve',
            'password' => bcrypt('adminadmin'),
            'ci' => '19097748',
            'role' => 0,
            'email_verified_at' => Carbon::now()
        ]);
    }
}
