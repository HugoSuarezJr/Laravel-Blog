<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

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
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->realText(10, 1),
            'slug' => $this->faker->realText(30, 1),
            'thumbnail' => $this->faker->imageUrl,
            'excerpt' => '<p>' . $this->faker->realText(100, 2) . '</p>',
            'body' => '<p>' . $this->faker->realText(700, 3) . '</p>'
        ];
    }
}
