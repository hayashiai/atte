<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 105; $i++) {
            DB::table('attendances')->insert([
                'user_id' => rand(1, 10), // ランダムなユーザーID
                'work_start' => '10:00:00',
                'work_end' => '20:00:00',
                'break_start' => '13:00:00',
                'break_end' => '13:30:00',
                'work_date' => '2024-09-04',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}


