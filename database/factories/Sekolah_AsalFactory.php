<?php

namespace Database\Factories;

use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sekolah_Asal>
 */
class Sekolah_AsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_sekolah' => $this->faker->company(),
            'alamat' => $this->faker->address(),
            'kelas_id' => rand(Kelas::min('id'), Kelas::max('id')),
        ];
    }
}
