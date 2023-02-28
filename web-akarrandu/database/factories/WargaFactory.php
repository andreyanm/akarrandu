<?php

namespace Database\Factories;

use App\Models\Warga;
use Illuminate\Database\Eloquent\Factories\Factory;

class WargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Warga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
        'nik' => $this->faker->word,
        'alamat' => $this->faker->text,
        'rw' => $this->faker->word,
        'rt' => $this->faker->word,
        'nohp' => $this->faker->word,
        'kecamatan_id' => $this->faker->randomDigitNotNull,
        'kelurahan_id' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'users_id' => $this->faker->word
        ];
    }
}
