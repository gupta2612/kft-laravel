<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Kft_contactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->name(),
        'email' => $this->faker->unique()->email(),
        'subject' => $this->faker->sentence(20),
        'description' => $this->faker->text(100)
        ];
    }
}
