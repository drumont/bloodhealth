<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Center::class, function (Faker\Generator $faker) {
    //static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'admin_id' => $faker=1,
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'root',
        'remember_token' => str_random(10),
        'admin' => $faker->boolean(30),
        'center_id' => App\Center::all()->random()->id,
    ];
});

$factory->define(App\Blood::class, function (Faker\Generator $faker) {

    return [
          'quantity' => $faker->  numerify('Adult 60CC'),
          'rhesus' => $faker->rhesus,
          'blood_group' => $faker->blood_group,
          'user_id' => App\User::all()->random()->id,
          'remember_token' => str_random(10),
    ];
});