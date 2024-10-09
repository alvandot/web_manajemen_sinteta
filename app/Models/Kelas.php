<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;
    protected $table = 'kelas';
    protected $fillable = ['nama_kelas', 'sekolah_id', 'tingkat'];

    public $timestamps = false;

    public function sekolah(): BelongsTo
    {
        return $this->belongsTo(Sekolah_Asal::class);
    }
}
