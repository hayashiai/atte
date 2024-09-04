<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // DBファサードをインポート
use Illuminate\Support\Facades\Hash; // Hashファサードをインポート

class Users2TableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users2')->insert([
            'name' => 'テスト太郎',
            'email' => 'test@example.com',
            'password' => Hash::make('password'), // ハッシュ化されたパスワード
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

