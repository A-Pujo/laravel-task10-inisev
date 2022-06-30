<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'Post ' . Str::random(6),
            'description' => Str::random(40),
            'website_id' => random_int(1,3),
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque hic deleniti aspernatur consequatur impedit quibusdam, deserunt ducimus officiis magni error, aperiam quam neque suscipit sequi earum ratione maxime adipisci optio!',
        ];
    }
}
