<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tour;
use App\Models\Category;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $categoryIds = Category::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            Tour::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph,
                'price' => $faker->numberBetween(1000000, 5000000),
                'duration_days' => $faker->numberBetween(1, 14),
                'category_id' => $faker->randomElement($categoryIds),
            ]);
        }
    }
}
