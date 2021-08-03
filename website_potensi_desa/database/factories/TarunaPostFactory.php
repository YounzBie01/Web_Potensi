<?php

namespace Database\Factories;

use App\Models\TarunaPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarunaPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TarunaPost::class;

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
            'category' => 'kegiatan',
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(2),
            'body' => $this->faker->paragraph(10),
            'highlight_photo_path' => 'logo/telaga_tanado.jpeg'
        ];
    }
}
