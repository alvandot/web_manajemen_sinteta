<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sekolah_Asal extends Model
{
    /** @use HasFactory<\Database\Factories\SekolahAsalFactory> */
    use HasFactory;

    protected $table = 'sekolah__asals';
    protected $fillable = ['nama_sekolah', 'alamat', 'kelas_id'];

    public $timestamps = false;

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }
}
