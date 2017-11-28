<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:08 PM
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Dish::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'price' => $faker->numberBetween(10, 500),
        'type' => $faker->randomElement(['food', 'drink', 'dessert']),
        'image_url' => $faker->imageUrl(500, 500, 'cats'),
        'status' => $faker->boolean(50),
        'menu_id' => function() {
            return factory(App\Menu::class)->create()->id;
        }
    ];
});
