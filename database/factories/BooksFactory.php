<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //fake data for books table
            "title"=>$this->faker->name(),
            "author"=>$this->faker->name(),
            "year_published"=>$this->faker->datetime('y-m-d'),
            "author_email"=>$this->faker->unique()->email(),
            'book_id'=>$this->faker->uuid()
        ];
    }
}
