<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username'      => $this->faker->unique()->userName,
            'name'          => $this->faker->name,
            'email'         => $this->faker->unique()->safeEmail,
            'password'      => bcrypt('password'),
            'address'       => $this->faker->address,
            'phone_number'  => $this->faker->phoneNumber,
            'role'          => 'customer'
        ];
    }
}
