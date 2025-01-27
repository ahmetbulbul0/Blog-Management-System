<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->unique()->words(2, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'parent_id' => null
        ];
    }

    public function asChild(): static
    {
        return $this->state(function (array $attributes) {
            return [
                'parent_id' => CategoryFactory::new()->create()->id
            ];
        });
    }
}
