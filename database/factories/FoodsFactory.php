<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_email'=>$this->faker->unique()->email(),
            'book_id'=>$this->faker->randomNumber()
        ];
    }
}
