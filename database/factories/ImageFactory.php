<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //  'url' => 'posts/' . $this->faker->imageUrl(storage_path(path:'public/storage/posts') , 640, 480, null, false)
            'url' => $this->faker->imageUrl(140, 130)
          ];
    }
}
