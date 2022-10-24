<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nisn',
        'nama',
        'alamat',
        'jenis_kelamin',
        'email',
        'foto',
        'about'
    ];

    public function projek()
    {
        return $this->hasMany(Projek::class);
    }

    public function kontak()
    {
        return $this->belongsToMany(JenisKontak::class)->withPivot('deskripsi', 'id');
    }
}
