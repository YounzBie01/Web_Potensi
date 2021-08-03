<?php

namespace Database\Factories;

use App\Models\CovidQuotes;
use Illuminate\Database\Eloquent\Factories\Factory;

class CovidQuotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CovidQuotes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'covid_quote' => $this->faker->paragraph(10)
        ];
    }
}
