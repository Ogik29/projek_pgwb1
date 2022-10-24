<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    use HasFactory;

    protected $table = 'projek';
    protected $fillable = [
        'siswa_id',
        'nama_projek',
        'deskripsi',
        'tanggal'
    ];

    public function siswa_projek()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
