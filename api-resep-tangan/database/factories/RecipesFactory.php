<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RecipesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'title',
            'description' => 'description',
            'materials' => 'materials',
            'banner' => json_encode([
                'path' => 'recipes/default-banner.jpg'
            ])
        ];
    }
}
