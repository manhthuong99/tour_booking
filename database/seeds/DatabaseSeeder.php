<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
        for ($i = 1; $i < 102; $i++) {
            App\Models\Tours::create([
                'tours_id'=>$i,
                'tours_name' => $faker->country,
                'description' => $faker->text,
                'destination' => $faker->city,
                'address' => $faker->address,
                'price' => rand(1000000, 10000000),
                'day_number' => rand(1, 3),
                'id_province' => rand(1, 63),
                'image' => 'sapa.jpg',
                'calendar' => $faker->dateTime,

            ]);
        }
        for ($i = 2; $i < 80; $i++) {
            App\Models\Booking::create([
                'id_users' => rand(2, 201),
                'id_tours' => rand(2, 101),
                'total' => rand(1000000, 10000000),
                'number_customer' => rand(1, 5),
                'booking_status' => rand(1, 2),
            ]);
        }
        \App\Models\Transport_detail::create(
            [
                'transport_detail_name' => 'Ô tô',
                'icon' => 'fa fa-fw fa-car'
            ]);
        \App\Models\Transport_detail::create(
            [
                'transport_detail_name' => 'Máy bay',
                'icon' => 'fa fa-fw fa-plane'
            ]);
        \App\Models\Transport_detail::create(
            [
                'transport_detail_name' => 'Tàu hỏa',
                'icon' => 'fa fa-fw fa-train'
            ]);
        \App\Models\Transport_detail::create(
            [
                'transport_detail_name' => 'Tàu thủy',
                'icon' => 'fa fa-fw fa-ship'
            ]
        );
        for ($i = 1; $i < 50; $i++) {
            \App\Models\Search::create([
                'id_users' => rand(2, 201),
                'searchs' => $faker->country,
            ]);
        }
        \App\Models\Category_detail::create([
            'category_detail_id'=>'1',
            'category_detail_name'=>'Miền Bắc',
            'position'=>'1',
        ]);
        \App\Models\Category_detail::create([
            'category_detail_id'=>'2',
            'category_detail_name'=>'Miền Trung',
            'position'=>'1',
        ]);
        \App\Models\Category_detail::create([
            'category_detail_id'=>'3',
            'category_detail_name'=>'Miền Nam',
            'position'=>'1',
        ]);
        \App\Models\Category_detail::create([
            'category_detail_id'=>'4',
            'category_detail_name'=>'Tour nổi bật',
            'position'=>'1',
        ]);
        for ($i = 1; $i < 200; $i++) {
            App\Models\Category::create([
                'id_category_detail' => rand(1, 4),
                'id_tours' => rand(1, 100),
            ]);
        }
        for ($i = 1; $i < 200; $i++) {
            App\Models\Transport::create([
                'id_transport_detail' => rand(1, 4),
                'id_tours' => rand(1, 100),
            ]);
        }
    }
}
