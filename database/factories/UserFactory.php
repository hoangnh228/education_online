<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = \App\Models\User::class;

    public function definition()
    {
        $roles = ['user', 'admin', 'teacher'];

        return [
            'full_name' => $this->faker->name(),
            'user_name' => $this->faker->userName(),
            'password' => bcrypt('password'),
            'dob' => $this->faker->date(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => $this->faker->randomElement($roles),
            'image' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}