<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'admin_id' => $this->faker->numberBetween(1,11),
            'title' => $this->faker->word(),
            'body' => $this->faker->sentence(),
        ];
    }
}
