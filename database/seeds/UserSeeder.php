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

        DB::table('users')->insert([
            'name' => 'Miriam Mendez',
            'email' => 'gaidyjg@tovarsat.com.ve',
            'password' => bcrypt('12345678'),
            'ci' => '8001778',
            'role' => 1,
            'email_verified_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Lilia Vivas',
            'email' => 'gggomez20@gmail.com',
            'password' => bcrypt('12345678'),
            'ci' => '10277648',
            'role' => 1,
            'email_verified_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Andres Arellano',
            'email' => 'gomeznemesis@gmail.com',
            'password' => bcrypt('12345678'),
            'ci' => '19847805',
            'role' => 1,
            'email_verified_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'Xichao Fang',
            'email' => 'gaidyjg@hotmail.com',
            'password' => bcrypt('12345678'),
            'ci' => '83928348',
            'role' => 1,
            'email_verified_at' => Carbon::now()
        ]);
    }
}
