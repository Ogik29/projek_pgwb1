<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.masterSiswa', [
            'siswa' => Siswa::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.masterSiswa.createSiswa', []);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = ([
            'required' => 'Isien le',
            'max' => 'Maximal :max Kidz',
            'min' => 'Minimal :min Kidz',
            'email' => 'Harus Berupa Email Kocak',
            'image' => 'Gambar harus berupa JPG, JPEG, PNG'
        ]);

        $validateData = $request->validate([
            'nisn' => 'required|max:12',
            'nama' => 'required|min:4',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'foto' => 'required|image',
            'about' => 'required'
        ], $messages);

        // $validateData['foto'] = $request->file('foto')->store('siswa_img', ['disk' => 'public']);
        // isi parameter yg ada di function store() adalah nama folder yang ingin disimpan sebuah filenya

        $file = $request->file('foto');
        $nama_file = time() . '_' . $file->getClientOriginalName();

        $file->move('img/', $nama_file);

        $validateData['foto'] = $nama_file;

        Siswa::create($validateData);
        return redirect('/mastersiswa')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.masterSiswa.showSiswa', [
            'siswa' => Siswa::firstWhere('id', $id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.masterSiswa.editSiswa', [
            'siswa' => Siswa::firstWhere('id', $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = ([
            'required' => 'Isien le',
            'max' => 'Maximal :max Kidz',
            'min' => 'Minimal :min Kidz',
            'email' => 'Harus Berupa Email Kocak',
            'image' => 'Gambar harus berupa JPG, JPEG, PNG'
        ]);

        $validateData = $request->validate([
            'nisn' => 'required|max:12',
            'nama' => 'required|min:4',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'email' => 'required|email',
            'foto' => 'image',
            'about' => 'required'
        ], $messages);

        // saat mengupdate foto baru maka file foto yang sebelumnya dari table siswa akan dihapus dari database maupun direktori
        // if ($request->file('foto')) {
        //     $validateData['foto'] = $request->file('foto')->store('siswa_img', ['disk' => 'public']);
        //     Storage::disk('public')->delete($siswa->foto);
        // }

        $siswa = Siswa::find($id);

        $file = $request->file('foto');
        if ($file) {
            $nama_file = time() . '_' . $file->getClientOriginalName();
            $file->move('img/', $nama_file);
            $validateData['foto'] = $nama_file;
            unlink(public_path('img/' . $siswa->foto));
        }

        Siswa::where('id', $id)->update($validateData);
        return redirect('/mastersiswa')->with('success', 'Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        unlink(public_path('img/' . $siswa->foto)); // untuk menghapus file
        Siswa::destroy($id);

        return redirect('/mastersiswa')->with('delete', 'Berhasil Dihapus');
    }
}
