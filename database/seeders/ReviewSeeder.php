<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Review;
use App\Models\User;
use App\Models\Tour;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $tourIds = Tour::pluck('id')->toArray();

        for ($i = 1; $i <= 40; $i++) {
            Review::create([
                'user_id' => $faker->randomElement($userIds),
                'tour_id' => $faker->randomElement($tourIds),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->sentence(10),
            ]);
        }
    }
}
