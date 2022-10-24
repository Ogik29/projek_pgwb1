<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKontak extends Model
{
    use HasFactory;

    protected $table = 'jenisKontak';
    protected $fillable = [
        'jenis_kontak'
    ];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
}
