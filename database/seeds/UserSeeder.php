<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 2; $i < 102; $i++) {
            App\Models\Tours::create([
                'tours_id'=> $i++,
                'tours_name' => $faker->city,
                'description' => $faker->address,
                'price' => rand(1000000,10000000),
                'day_number'=>rand(1,3),
                'id_province'=>rand(1,63),
                'image'=>'sapa.jpg',
                'calendar'=>$faker->dateTime,

            ]);
        }
    }
}
