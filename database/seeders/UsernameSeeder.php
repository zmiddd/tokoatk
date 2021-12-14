<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsernameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Rachma Novita',
            'name' => 'Vitaa',
            'email' => 'vit@gmail.com',
            'password' => Hash::make('vita18'),
        ]);
    }
}
