<?php

namespace Database\Factories;

use App\Models\CovidTips;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidTipsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CovidTips::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tips' => $this->faker->sentence(3),
            'image_path' => 'logo/telaga_tanado.jpeg'
        ];
    }
}
