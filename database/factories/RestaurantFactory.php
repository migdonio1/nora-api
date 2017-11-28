<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:25 PM
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'start_year' => $faker->numberBetween(1800, 2016),
    ];
});