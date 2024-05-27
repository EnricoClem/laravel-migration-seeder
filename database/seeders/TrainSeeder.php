<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $companies = ['Trenitalia', 'Italo', 'Trenord', 'Trenino Thomas'];

        for($i = 0; $i < 100; $i++) {
            $new_train = new Train();

            $new_train = new Train();
            $new_train->company = $faker->randomElement($companies);
            $new_train->departing_date = $faker->dateTime();
            $new_train->arriving_date = $faker->dateTimeInInterval($new_train->departing_date, '+2 days');
            $new_train->departing_station = $faker->city();
            $new_train->arriving_station = $faker->city();
            $new_train->departing_time = $faker->time();
            $new_train->arriving_time = $faker->time();
            $new_train->train_code = $faker->unique()->numerify('######');
            $new_train->carriages = $faker->numberBetween(6, 12);
            $new_train->in_time = $faker->randomElement([true, false]);
            $new_train->cancelled = $faker->randomElement([true, false]);

            $new_train->save();
        }

        // $trains = [
        //     [
        //         'company' => 'Trenitalia',
        //         'departing_date' => 13/05/2024,
        //         'arriving_date' => 13/05/2024,
        //         'departing_station' => 'Bologna',
        //         'arriving_station' => 'Milano Cnetrale',
        //         'departing_time' => 09.20,
        //         'arriving_time' => 13.50,
        //         'train_code' => 253846,
        //         'carriages' => 8,
        //         'in_time' => true,
        //         'cancelled' => false,
        //     ]
        // ];
        // foreach ($trains as $train) {
        //     $new_train = new Train();
        //     $new_train->company = $train['company'];
        //     $new_train->departing_date = $train['departing_date'];
        //     $new_train->arriving_date = $train['arriving_date'];
        //     $new_train->departing_station = $train['departing_station'];
        //     $new_train->arriving_station = $train['arriving_station'];
        //     $new_train->departing_time = $train['departing_time'];
        //     $new_train->arriving_time = $train['arriving_time'];
        //     $new_train->train_code = $train['train_code'];
        //     $new_train->carriages = $train['carriages'];
        //     $new_train->in_time = $train['in_time'];
        //     $new_train->cancelled = $train['cancelled'];
        // }
    }
}
