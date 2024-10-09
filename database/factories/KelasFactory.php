<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kelas>
 */
class KelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kelas = [
            ['nama_kelas' => 'VII', 'tingkat' => 'SMP'],
            ['nama_kelas' => 'VIII', 'tingkat' => 'SMP'],
            ['nama_kelas' => 'IX', 'tingkat' => 'SMP'],
            ['nama_kelas' => 'X', 'tingkat' => 'SMA'],
            ['nama_kelas' => 'XI', 'tingkat' => 'SMA'],
            ['nama_kelas' => 'XII', 'tingkat' => 'SMA']
        ];

        return $kelas;
    }
}
