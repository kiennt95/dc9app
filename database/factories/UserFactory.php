<?php

use Faker\Generator as Faker;

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

$factory->define(App\model\Users::class, function (Faker $faker) {
    $gender = rand(1,2);
    $genderStr = 'female';
    if($gender == 1)
        $genderStr = 'male';

    return [
        'username'      => $faker->userName,
        'email'         => $faker->unique()->safeEmail,
        'first_name'    => $faker->firstName($genderStr),
        'last_name'     => $faker->lastName($genderStr),
        'phone'         => $faker->e164PhoneNumber,
        'birthday'      => $faker->date('Y-m-d','1990-09-18'),
        'status'        => 1,
        'gender'        => $gender,
        'location_id'   => rand(1,3),
        //'avatar'        => $faker->image('/tmp', 500, 500),
        'password'      => \Illuminate\Support\Facades\Hash::make('password', [ 'rounds' => 12 ]),
        'remember_token' => str_random(10),
    ];

});
