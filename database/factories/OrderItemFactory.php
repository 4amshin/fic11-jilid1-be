<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(), // Asumsikan ada relasi dengan tabel 'orders'
            'product_id' => Product::factory(), // Asumsikan ada relasi dengan tabel 'products'
            'quantity' => $this->faker->numberBetween(1, 5),
            'total_price' => $this->faker->numberBetween(10000, 50000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
