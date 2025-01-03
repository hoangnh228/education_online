<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WishlistFactory extends Factory
{
    protected $model = \App\Models\Wishlist::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'course_id' => \App\Models\Course::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}