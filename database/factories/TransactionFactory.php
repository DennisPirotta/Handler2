<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'customer_id' => Customer::all()->random()->id,
            'payed' => fake()->boolean,
            'date' => fake()->dateTime,
            'type' => fake()->boolean,
            'price' => random_int(0,1000)
        ];
    }
}
