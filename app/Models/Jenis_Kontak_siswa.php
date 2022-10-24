<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_Kontak_Siswa extends Model
{
    use HasFactory;

    protected $table = 'jenis_kontak_siswa';
    protected $fillable = [
        'siswa_id',
        'jenis_kontak_id',
        'deskripsi'
    ];

    public function siswa_kontak()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function jenis_kontak()
    {
        return $this->belongsTo(JenisKontak::class);
    }
}
