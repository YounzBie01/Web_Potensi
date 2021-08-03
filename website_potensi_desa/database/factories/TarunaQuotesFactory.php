<?php

namespace Database\Factories;

use App\Models\TarunaQuotes;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarunaQuotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TarunaQuotes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'taruna_quote' => $this->faker->sentence(8),
        ];
    }
}
