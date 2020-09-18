<?php

use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 2; $i < 80; $i++) {
            App\Models\Booking::create([
                'id_users' => rand(2,201),
                'id_tours'=>rand(2,101),
                'total'=>rand(1000000,10000000),
                'number_customer'=>rand(1,5),
            ]);
        }
    }
}
