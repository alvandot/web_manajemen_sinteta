<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Sekolah_Asal;
use App\Models\Siswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'head_branch']);

        User::factory()->create([
            'name' => 'Gusti',
            'email' => 'gusti@sinteta.com',
            'password' => Hash::make('password'),
        ])->assignRole('head_branch');
        Kelas::create([
            'nama_kelas' => 'VII',
            'tingkat' => 'SMP',
        ]);
        Kelas::create([
            'nama_kelas' => 'VIII',
            'tingkat' => 'SMP',
        ]);
        Kelas::create([
            'nama_kelas' => 'IX',
            'tingkat' => 'SMP',
        ]);
        Kelas::create([
            'nama_kelas' => 'X',
            'tingkat' => 'SMA',
        ]);
        Kelas::create([
            'nama_kelas' => 'XI',
            'tingkat' => 'SMA',
        ]);
        Kelas::create([
            'nama_kelas' => 'XII',
            'tingkat' => 'SMA',
        ]);

        Sekolah_Asal::factory()->count(10)->create();
        Siswa::factory()->count(100)->create();
    }
}
