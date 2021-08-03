<?php

namespace Database\Factories;

use App\Models\TarunaImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarunaImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TarunaImages::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image_path' => 'logo/telaga_tanado.jpeg',
            'description' => $this->faker->paragraph(5)
        ];
    }
}
