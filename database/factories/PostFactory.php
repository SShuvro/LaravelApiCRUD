<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Stringable;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
protected $model = Post::class;

    public function definition()
    {
        return [
           'name' => $this->faker->name(),
           'age' => $this->faker->numberBetween(1, 100),
           'country' => $this->faker->randomElement(['England', 'Australia', 'Canada', 'Hungary', 'Germany', 'Wales', 'Scotland','Bangladesh','india', 'Northern Ireland', 'Southern Ireland', 'United Kingdom']),
        ];
    }

}