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
        // Product::factory(5)->create();

        $products = [
            ['name' => 'Bakso', 'price' => 10000, 'stock' => 50, 'category' => 'food', 'is_best_seller' => true],
            ['name' => 'Nasi Goreng', 'price' => 13000, 'stock' => 40, 'category' => 'food', 'is_best_seller' => false],
            ['name' => 'Americano', 'price' => 17000, 'stock' => 30, 'category' => 'drink', 'is_best_seller' => true],
            ['name' => 'Cappucino', 'price' => 20000, 'stock' => 25, 'category' => 'drink', 'is_best_seller' => true],
            ['name' => 'Nugget', 'price' => 12000, 'stock' => 60, 'category' => 'snack', 'is_best_seller' => false],
            ['name' => 'Kentang Goreng', 'price' => 10000, 'stock' => 45, 'category' => 'snack', 'is_best_seller' => false],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
