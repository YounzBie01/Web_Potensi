<?php

namespace Database\Factories;

use App\Models\BumdesPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BumdesPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BumdesPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'category' => 'umkm',
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(2),
            'body' => $this->faker->paragraph(10),
            'highlight_photo_path' => 'logo/bumdes.png'
        ];
    }
}
