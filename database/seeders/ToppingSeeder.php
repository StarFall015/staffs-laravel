<?php

namespace Database\Seeders;

use App\Models\Topping;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topping::create([
            'name' => 'Cheese',
        ]);

        Topping::create([
            'name' => 'Tomato sauce',
        ]);

        Topping::create([
            'name' => 'Pepperoni',
        ]);

        Topping::create([
            'name' => 'Ham',
        ]);

        Topping::create([
            'name' => 'Chicken',
        ]);

        Topping::create([
            'name' => 'Minced beef',
        ]);

        Topping::create([
            'name' => 'Sausage',
        ]);

        Topping::create([
            'name' => 'Bacon',
        ]);

        Topping::create([
            'name' => 'Onions',
        ]);

        Topping::create([
            'name' => 'Green peppers',
        ]);

        Topping::create([
            'name' => 'Mushrooms',
        ]);

        Topping::create([
            'name' => 'Sweetcorn',
        ]);

        Topping::create([
            'name' => 'Jalapeno peppers',
        ]);

        Topping::create([
            'name' => 'Vegan cheese',
        ]);

        Topping::create([
            'name' => 'Pineapple',
        ]);

        Topping::create([
            'name' => 'Salami',
        ]);

        Topping::create([
            'name' => 'Olives',
        ]);

        Topping::create([
            'name' => 'Spicy beef',
        ]);

        Topping::create([
            'name' => 'Hot dog pieces',
        ]);
    }
}
