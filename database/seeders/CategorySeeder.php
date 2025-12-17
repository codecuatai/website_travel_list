<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            Category::create([
                'name' => ucfirst($faker->unique()->word),
                'description' => $faker->sentence,
            ]);
        }
    }
}
