<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'name' => 'Mustafa Src',
           'email' => 'deneme@gmail.com',
            'password' => bcrypt(102030)
        ]);
    }
}
