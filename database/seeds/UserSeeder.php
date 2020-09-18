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
        App\Models\Users::create([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'mthuong03@gmail.com',
            'fullname' => 'Nguyễn Mạnh Thưởng',
            'address' => 'Thanh Xuân, Hà Nội',
            'avatar' => 'avatar-clone.jpg',
            'status' => 1,
            'permission' => 1,

        ]);
        for ($i = 2; $i < 202; $i++) {
            App\Models\Users::create([
                'username' => $faker->userName,
                'password' => bcrypt('test'),
                'email' => $faker->email,
                'fullname' => $faker->name,
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'avatar' => 'avatar-clone.jpg',
                'status' => 1,
                'permission' => 0,

            ]);
        }
    }
}
