<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Users2TableSeeder extends Seeder {
    public function run() {
        for ($i = 1; $i <= 105; $i++) {
            DB::table('users2')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'password' => bcrypt('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}



