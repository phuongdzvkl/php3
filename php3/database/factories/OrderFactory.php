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
            'userId' => User::all()->random()->user_id,
            'created_at' => $this->faker->dateTime,
            'totalPrice' => $this->faker->randomFloat(2, 1, 100),
            'updated_at' => $this->faker->dateTime,

        ];
    }
}
