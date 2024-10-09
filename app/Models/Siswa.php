<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'alamat',
        'nomor_telepon',
        'tanggal_lahir',
        'jenis_kelamin',
        'kelas_id',
        'sekolah_asal_id'
    ];

    public $timestamps = false;

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function sekolahAsal(): BelongsTo
    {
        return $this->belongsTo(Sekolah_Asal::class);
    }
}
