<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "fname" => fake()->firstName(),
            "lname" => fake()->lastName(),
            "city" => fake()->city(),
            "email" => fake()->unique()->email(),
            "fees" => fake()->numberBetween(10000, 35000),
            "age" => fake()->numberBetween(20, 40),
            "dateofbirth" => fake()->date("Y-m-d", "2002-02-20")
        ];
    }
}
