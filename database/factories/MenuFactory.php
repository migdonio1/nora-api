<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:20 PM
 */
/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'restaurant_id' => function () {
            return factory(App\Restaurant::class)->create()->id;
        }
    ];
});