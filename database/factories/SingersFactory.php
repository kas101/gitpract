<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SingersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'user_id'=>$this->faker->unique()->numberBetween(1,50),
            'name'=>$this->faker->name(),
            'country'=>$this->faker->country(),
            'city'=>$this->faker->city(),
            'albums_sold'=>$this->faker->randomNumber(5,false),
            
        ];
    }
}
