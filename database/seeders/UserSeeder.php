<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // Admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@travellist.com',
            'password' => Hash::make('123456'),
            'phone' => '0111111111',
            'role' => 'admin'
        ]);

        // Users
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('123456'),
                'phone' => $faker->phoneNumber,
                'role' => 'user'
            ]);
        }
    }
}
