<?php

namespace Database\Factories;

use App\Models\TarunaMembers;
use Illuminate\Database\Eloquent\Factories\Factory;

class TarunaMembersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TarunaMembers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=> $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            'nik' => $this->faker->nik(),
            'jabatan' => '000',
            'kota_lahir' => $this->faker->city(),
            'tanggal_lahir' => '1 Juli 1980',
            'jenis_kelamin' => 'laki-laki',
            'gol_dar' => 'O',
            'agama' => 'Islam',
            'kewarganegaraan' => 'Indonesia',
            'alamat' => $this->faker->address(),
            'foto_path' => 'logo/bumdesp.png'
        ];
    }
}
