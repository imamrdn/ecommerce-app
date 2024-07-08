<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'username'      => 'admin',
            'name'          => 'E-Commerce Koncoo',
            'email'         => 'admin@koncoo.com',
            'password'      => bcrypt('password'),
            'address'       => 'Kota Yogyakarta',
            'phone_number'  => '0877776554433',
            'role'          => 'admin'
        ]);

        User::create([
            'username'      => 'customer',
            'name'          => 'Customer Koncoo',
            'email'         => 'Customer@gmail.com',
            'password'      => bcrypt('password'),
            'address'       => 'Sleman, Yogyakarta',
            'phone_number'  => '6287766990044',
            'role'          => 'customer'
        ]);

        User::factory()->count(10)->create();
    }
}
