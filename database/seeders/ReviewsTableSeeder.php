<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('reviews')->insert([
            [
                'user_id' => 1,
                'courses_id' => 1,
                'rating' => 5,
                'comment' => 'This course is amazing! I learned so much.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'courses_id' => 2,
                'rating' => 4,
                'comment' => 'Great course with in-depth content.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'courses_id' => 3,
                'rating' => 3,
                'comment' => 'Good course, but could use more examples.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
