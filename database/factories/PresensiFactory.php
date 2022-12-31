<?php

namespace Database\Factories;

use App\Models\Presensi;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresensiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Presensi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_presensi' => $this->faker->randomDigitNotNull,
        'nip' => $this->faker->randomDigitNotNull,
        'tanggal' => $this->faker->word,
        'status' => $this->faker->word,
        'keterangan' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
