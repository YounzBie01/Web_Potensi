<?php

namespace Database\Factories;

use App\Models\BumdesImages;
use Illuminate\Database\Eloquent\Factories\Factory;

class BumdesImagesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BumdesImages::class;

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
