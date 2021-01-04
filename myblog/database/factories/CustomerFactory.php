<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->firstName,
            'customer_phone' => $this->faker->phoneNumber,
            'customer_address' => $this->faker->address,
            'customer_email' => $this->faker->unique()->safeEmail,
            'customer_city' => $this->faker->city,

        ];
    }
}
