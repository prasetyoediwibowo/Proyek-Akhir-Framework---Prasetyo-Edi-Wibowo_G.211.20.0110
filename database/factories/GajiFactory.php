<?php

namespace Database\Factories;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Factories\Factory;

class GajiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gaji::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->randomDigitNotNull,
        'nama_pegawai' => $this->faker->word,
        'total_gaji' => $this->faker->word,
        'nomor_rekening' => $this->faker->word,
        'alamat' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
