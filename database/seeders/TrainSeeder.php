<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 100; $i++) {
            $train = new Train();

            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure = $faker->dateTime();
            $train->arrival = $faker->dateTime();
            $train->train_code = $faker->randomNumber(4, true);
            $train->no_carriages = $faker->numberBetween(5, 20);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();

            $train->save();
        }
    }
}
