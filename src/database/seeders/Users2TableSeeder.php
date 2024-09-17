<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Users2TableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'テスト太郎',
            'email' => Str::random(10) . '@example.com', 
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}