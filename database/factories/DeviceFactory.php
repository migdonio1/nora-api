<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:25 PM
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Device::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'menu_id' => function() {
            return factory(App\Menu::class)->create()->id;
        },
        'restaurant_id' => function() {
            return factory(App\Restaurant::class)->create()->id;
        }
    ];
});