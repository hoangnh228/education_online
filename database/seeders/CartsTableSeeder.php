<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('carts')->insert([
            [
                'user_id' => 1,
                'courses_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'courses_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'courses_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}