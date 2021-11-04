<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1,11),
            'student_id' => $this->faker->numberBetween(1,11),
            'body' => $this->faker->sentence(4),
        ];
    }
}
