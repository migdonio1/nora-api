<?php

use App\Device;
use App\Dish;
use App\Menu;
use App\Restaurant;
use Illuminate\Database\Seeder;

class MvpSeeder extends Seeder
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

        factory(Device::class, 1)->create([
            'name' => 'Dispositivo Normal',
            'restaurant_id' => function() {
                return Restaurant::all()->first()->id;
            }
        ]);

        factory(Menu::class, 1)->create([
            'name' => 'Menu Normal',
            'restaurant_id' => function() {
                return Restaurant::all()->first()->id;
            }
        ]);

        $this->seedFoods();
        $this->seedDrinks();
        $this->seedDesserts();

    }

    private function seedDrinks(){
        factory(Dish::class, 1)->create([
            'name' => 'Pepsi',
            'description' => 'Acompaña tus COMBOS con un refresco grande del sabor que tú quieras!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/drink1.png',
            'type' => 'drink',
            'price' => 30,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Cafe americano',
            'description' => 'De grano suave, nuestro café americano es una mezcla 100% arábica de América Latina, con notas dulces que te ofrecen un sabor suave, equilibrado y perfecto para comenzar el día.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/drink2.png',
            'type' => 'drink',
            'price' => 28,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Agua',
            'description' => 'Acompaña tus COMBOS con el agua que te gusta!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/drink3.png',
            'type' => 'drink',
            'price' => 22,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Jugo',
            'description' => 'Acompaña tus COMBOS con un jugo refrescante!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/drink4.png',
            'type' => 'drink',
            'price' => 25,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);
    }

    private function seedDesserts(){
        factory(Dish::class, 1)->create([
            'name' => 'King fusion con emperador',
            'description' => 'Delicioso sundae de vainilla, mezclado con trocitos de galleta Emperador® para un sabor único.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/dessert1.png',
            'type' => 'dessert',
            'price' => 48,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Pay Hersheys',
            'description' => 'Da la bienvenida a nuestro Pay HERSHEY\'S® Primero, una corteza de chocolate crujiente y una parte de relleno cremoso de chocolate, adornado con un delicioso relleno de chocolate HERSHEY\'S® y chispas de chocolate.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/dessert2.png',
            'type' => 'dessert',
            'price' => 45,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Pay de manzana',
            'description' => 'Con un relleno de manzana y envuelto en costra de hojaldre, nuestro Pay de Manzana se se sirve calientito, recién salido de la cocina.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/dessert3.png',
            'type' => 'dessert',
            'price' => 30,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);
    }

    private function seedFoods() {
        factory(Dish::class, 1)->create([
            'name' => 'Whooper BBQ',
            'description' => 'Prueba la nueva creación con carne a la parrilla, mayonesa, lechuga, cebolla, jitomate, pepinillos, queso americano y crujientes trozos de tocino. ¡Todo acompañado de una deliciosa salsita BBQ!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger1.png',
            'type' => 'food',
            'price' => 58,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Whooper con queso',
            'description' => 'Nuestra WHOPPER® lleva una carne de res a la parrilla, preparada con jugosos tomates, lechuga recién cortada, mayonesa, pepinillos y cebollas en rodajas, sobre un pan suave con ajonjolí. ¡Pídela en COMBO con papas a la francesa y refresco frío!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger2.png',
            'type' => 'food',
            'price' => 48,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Hamburguesa con queso',
            'description' => 'Siempre es una buena opción elegir nuestra hamburguesa con queso, deliciosa carne a la parrilla cubierta con una rebanada de queso amarillo derretido, pepinillos frescos, mostaza y salsa de tomate, sobre un pan suave con ajonjolí.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger3.png',
            'type' => 'food',
            'price' => 36,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);
        factory(Dish::class, 1)->create([
            'name' => 'Whooper doble con queso',
            'description' => 'Nuestra WHOPPER® Doble con Queso está preparada con dos carnes de res a la parrilla, jugosos tomates, lechuga recién cortada, mayonesa, pepinillos y cebollas en rodajas, sobre un pan suave con ajonjolí. ¡Pídela en COMBO con papas a la francesa y refresco frío!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger4.png',
            'type' => 'food',
            'price' => 58,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);
        factory(Dish::class, 1)->create([
            'name' => 'Hamburguesa con queso y tocino',
            'description' => 'Si lo tuyo es el tocino, tenemos para ti esta excelente opción con carne a la parrilla, acompañada con tocino ahumado con una capa de queso americano derretido, pepinillos frescos, cátsup y mostaza sobre un pan crujiente con ajonjolí.',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger5.png',
            'type' => 'food',
            'price' => 45,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);

        factory(Dish::class, 1)->create([
            'name' => 'Whooper angry',
            'description' => 'Nuestra WHOPPER® Angry lleva una carne de res a la parrilla, preparada con deliciosas tiras de tocino, jugosos tomates, lechuga recién cortada, mayonesa, jalapeños y cebollitas angry, sobre un pan suave con ajonjolí. ¡Pídela en COMBO con papas a la francesa y refresco frío!',
            'image_url' => 'https://s3.amazonaws.com/nora-dev/dishes/burger6.png',
            'type' => 'food',
            'price' => 58,
            'menu_id' => function() {
                return Menu::all()->first()->id;
            }
        ]);
    }
}
