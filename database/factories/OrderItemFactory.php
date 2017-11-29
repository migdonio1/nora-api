<?php
/**
 * Created by PhpStorm.
 * User: migdonio
 * Date: 11/27/17
 * Time: 4:25 PM
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\OrderItem::class, function (Faker\Generator $faker) {
    return [
        'quantity' => $faker->numberBetween(1, 6),
        'notes' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'order_id' => function() {
            return factory(App\Order::class)->create()->id;
        },
        'dish_id' => function() {
            return factory(App\Dish::class)->create()->id;
        }
    ];
});