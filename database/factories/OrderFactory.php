<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_time' => now(),
            'total_price' => $this->faker->numberBetween(10000, 100000),
            'total_item' => $this->faker->numberBetween(1, 10),
            'kasir_id' => User::factory(), // Asumsikan ada relasi dengan tabel 'users'
            'payment_method' => $this->faker->randomElement(['Tunai', 'QRIS']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
