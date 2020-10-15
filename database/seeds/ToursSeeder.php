<?php

use Illuminate\Database\Seeder;

class ToursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 1; $i < 102; $i++) {
            App\Models\Tours::create([
                'tours_name' => $faker->country,
                'description' => $faker->text,
                'destination' => $faker->city,
                'address' => $faker->address,
                'price' => rand(1000000,10000000),
                'day_number'=>rand(1,3),
                'id_province'=>rand(1,63),
                'image'=>'sapa.jpg',
                'calendar'=>$faker->dateTime,

            ]);
        }
    }
}
