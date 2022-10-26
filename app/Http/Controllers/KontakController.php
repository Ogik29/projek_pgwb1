<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Kontak_Siswa;
use App\Models\JenisKontak;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.masterContact', [
            'siswa' => Siswa::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.masterContact.createContact', [
            'siswa' => Siswa::find($id),
            'jenis_kontak' => JenisKontak::latest()->get()
        ]);
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
        ]);

        $validateData = $request->validate([
            'siswa_id' => 'required',
            'jenis_kontak_id' => 'required',
            'deskripsi' => 'required'
        ], $messages);

        Jenis_Kontak_Siswa::create($validateData);
        return redirect('/mastercontact')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.masterContact.showContact', [
            'siswa' => Siswa::find($id)
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
        return view('admin.masterContact.editContact', [
            'kontak_siswa' => Jenis_Kontak_Siswa::find($id)
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
        ]);

        $validateData = $request->validate([
            'deskripsi' => 'required'
        ], $messages);

        Jenis_Kontak_Siswa::where('id', $id)->update($validateData);
        return redirect('/mastercontact')->with('success', 'Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenis_Kontak_Siswa::destroy($id);

        return redirect('/mastercontact')->with('delete', 'Data Berhasil Dihapus');
    }

    // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    public function show_jenis_kontak()
    {
        return view('admin.masterContact.showContactType', [
            'jenis_kontak' => JenisKontak::latest()->get()
        ]);
    }

    public function create_jenis_kontak()
    {
        return view('admin.masterContact.createContactType', []);
    }

    public function store_jenis_kontak(Request $request)
    {
        $messages = ([
            'required' => 'Isien Le'
        ]);

        $validateData = $request->validate([
            'jenis_kontak' => 'required'
        ], $messages);

        JenisKontak::create($validateData);
        return redirect('/mastercontact/show_contact_type/iya')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit_jenis_kontak($id)
    {
        return view('admin.mastercontact.editContactType', [
            'jenis_kontak' => JenisKontak::find($id)
        ]);
    }

    public function update_jenis_kontak(Request $request, $id)
    {
        $messages = ([
            'required' => 'Isien Le'
        ]);

        $validateData = $request->validate([
            'jenis_kontak' => 'required'
        ], $messages);

        JenisKontak::where('id', $id)->update($validateData);
        return redirect('/mastercontact/show_contact_type/iya')->with('success', 'Data Berhasil DiUpdate');
    }

    public function delete_jenis_kontak($id)
    {
        JenisKontak::destroy($id);
        return redirect('/mastercontact/show_contact_type/iya')->with('delete', 'Data Berhasil Dihapus');
    }
}
