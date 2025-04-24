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
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'exerpt' => $this->faker->paragraph,
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(5)) . '</p>',
            'author' => $this->faker->name,
            'category_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
