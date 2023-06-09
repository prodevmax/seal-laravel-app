<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        //generate slug from title
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'slug' => $slug,
            'description' => $this->faker->text,
            'body' => $this->faker->text,
            'img' => $this->faker->imageUrl(640, 480, 'animals', true),
        ];
    }
}
