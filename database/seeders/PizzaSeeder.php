<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pizza::create([
            'name' => 'Margherita - Small',
            'price' => 8.00,
        ]);

        Pizza::create([
            'name' => 'Margherita - Medium',
            'price' => 9.00,
        ]);

        Pizza::create([
            'name' => 'Margherita - Large',
            'price' => 12.00,
        ]);

        Pizza::create([
            'name' => 'Gimme the Meat - Small',
            'price' => 11.00,
        ]);

        Pizza::create([
            'name' => 'Gimme the Meat - Medium',
            'price' => 14.50,
        ]);

        Pizza::create([
            'name' => 'Gimme the Meat - Large',
            'price' => 16.50,
        ]);

        Pizza::create([
            'name' => 'Veggie Delight - Small',
            'price' => 10.00,
        ]);

        Pizza::create([
            'name' => 'Veggie Delight - Medium',
            'price' => 13.00,
        ]);

        Pizza::create([
            'name' => 'Veggie Delight - Large',
            'price' => 15.00,
        ]);

        Pizza::create([
            'name' => 'Make Mine Hot - Small',
            'price' => 11.00,
        ]);

        Pizza::create([
            'name' => 'Make Mine Hot - Medium',
            'price' => 13.00,
        ]);

        Pizza::create([
            'name' => 'Make Mine Hot - Large',
            'price' => 15.00,
        ]);
    }
}
