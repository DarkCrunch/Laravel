<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'First Product',
            'short_description' => 'something to drink, just relax',
            'description' => 'lorem ipsum dolor set aimet',
            'price' => 23
        ]);

        Product::create([
            'name' => 'Second Product',
            'short_description' => 'something to eat, just relax',
            'description' => 'lorem ipsum dolor set aimet',
            'price' => 24
        ]);

        Product::create([
            'name' => 'Third Product',
            'short_description' => 'something to sleep, just relax',
            'description' => 'lorem ipsum dolor set aimet',
            'price' => 25
        ]);

        //Para usar factory usamos
        Product::factory()->count(3)->create();
    }
}
