<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jenis_Kontak_Siswa;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Projek;
use App\Models\JenisKontak;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Siswa::create([
            'nisn' => 1232234,
            'nama' => 'Makima',
            'alamat' => 'Chainsaw',
            'jenis_kelamin' => 'Wanita',
            'email' => 'makima@gmail.com',
            'foto' => 'makima.png',
            'about' => 'Hot'
        ]);

        Siswa::create([
            'nisn' => 1232443,
            'nama' => 'Quanxi',
            'alamat' => 'Chainsaw',
            'jenis_kelamin' => 'Wanita',
            'email' => 'quanxi@gmail.com',
            'foto' => 'quanxi.png',
            'about' => 'Badass'
        ]);

        Siswa::create([
            'nisn' => 1232989,
            'nama' => 'Power',
            'alamat' => 'Chainsaw',
            'jenis_kelamin' => 'Wanita',
            'email' => 'power@gmail.com',
            'foto' => 'power.png',
            'about' => 'Funny'
        ]);

        JenisKontak::create([
            'jenis_kontak' => 'Instagram'
        ]);

        JenisKontak::create([
            'jenis_kontak' => 'WhatsApp'
        ]);

        JenisKontak::create([
            'jenis_kontak' => 'Discord'
        ]);

        Jenis_Kontak_siswa::create([
            'siswa_id' => 1,
            'jenis_kontak_id' => 2,
            'deskripsi' => '0844476899'
        ]);

        Projek::create([
            'siswa_id' => 1,
            'nama_projek' => 'Project 1',
            'deskripsi' => 'First Project cuy',
            'tanggal' => now()
        ]);

        Projek::create([
            'siswa_id' => 1,
            'nama_projek' => 'Project 2',
            'deskripsi' => 'Second Project cuy',
            'tanggal' => now()
        ]);

        Projek::create([
            'siswa_id' => 2,
            'nama_projek' => 'Project Quanxi',
            'deskripsi' => 'Quanxi Project',
            'tanggal' => now()
        ]);

        Projek::create([
            'siswa_id' => 3,
            'nama_projek' => 'Power',
            'deskripsi' => 'Power Project',
            'tanggal' => now()
        ]);

        Projek::factory(10)->create();

        User::create([
            'name' => 'Lemao',
            'email' => 'lemao@gmail.com',
            'password' => bcrypt('sandi')
        ]);
    }
}
