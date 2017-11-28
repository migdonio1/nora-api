<?php

use App\Device;
use App\Dish;
use App\Menu;
use App\Restaurant;
use Illuminate\Database\Seeder;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Create Burguer King
        factory(Restaurant::class, 1)->create([
            'name' => 'Burger King'
        ]);

        factory(Restaurant::class, 9)->create();

        factory(Device::class, 3)->create([
            'name' => 'Dispositivo Normal',
            'restaurant_id' => function() {
                return Restaurant::all()->first()->id;
            }
        ]);

        factory(Menu::class, 5)->create([
            'name' => 'Menu Normal',
            'restaurant_id' => function() {
                return Restaurant::all()->first()->id;
            }
        ]);

        factory(Dish::class, 20)->create([
            'name' => 'Whooper con Queso',
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        /*factory(Category::class, 15)->create();

        factory(Theater::class, 20)
            ->create([
                'user_id' => function() {
                    return User::all()->random(1)->first()->id;
                }
            ]);

        factory(Event::class, 40)
            ->create([
                'user_id' => function() {
                    return User::all()->random(1)->first()->id;
                },
                'category_id' => function() {
                    return Category::all()->random(1)->first()->id;
                }
            ]);

        factory(Review::class, 200)
            ->create([
                'event_id' => function() {
                    return Event::all()->random(1)->first()->id;
                }
            ]);

        factory(Schedule::class, 100)
            ->create([
                'event_id' => function() {
                    return Event::all()->random(1)->first()->id;
                },
                'theater_id' => function() {
                    return Theater::all()->random(1)->first()->id;
                }
            ]);*/
    }
}
