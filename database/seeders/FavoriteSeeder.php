<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Favorite;
use App\Models\User;
use App\Models\Tour;

class FavoriteSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $tourIds = Tour::pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            Favorite::firstOrCreate([
                'user_id' => $faker->randomElement($userIds),
                'tour_id' => $faker->randomElement($tourIds),
            ]);
        }
    }
}
