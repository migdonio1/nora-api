<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:25 PM
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'total' => $faker->numberBetween(300, 940),
        'notes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'device_id' => function() {
            return factory(App\Device::class)->create()->id;
        },
        'restaurant_id' => function() {
            return factory(App\Restaurant::class)->create()->id;
        }
    ];
});