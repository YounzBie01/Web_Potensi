<?php

namespace Database\Factories;

use App\Models\BumdesQuotes;
use Illuminate\Database\Eloquent\Factories\Factory;

class BumdesQuotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BumdesQuotes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bumdes_quote' => $this->faker->sentence(),
        ];
    }
}
