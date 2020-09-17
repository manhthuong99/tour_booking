<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Users;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Users::class, function (Faker $faker) {
    return [
        'username' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('test'), // password
        'permission'=>0,
        'status'=>1,
        'avatar'=>'avatar-clone.jpg'
    ];
});
