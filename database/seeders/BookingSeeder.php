<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Booking;
use App\Models\User;
use App\Models\Tour;

class BookingSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = User::pluck('id')->toArray();
        $tourIds = Tour::pluck('id')->toArray();

        for ($i = 1; $i <= 50; $i++) {
            Booking::create([
                'user_id' => $faker->randomElement($userIds),
                'tour_id' => $faker->randomElement($tourIds),
                'booking_date' => $faker->date(),
                'num_people' => $faker->numberBetween(1, 6),
                'total_price' => $faker->numberBetween(2000000, 20000000),
                'status' => $faker->randomElement(['pending', 'confirmed', 'cancelled']),
            ]);
        }
    }
}
