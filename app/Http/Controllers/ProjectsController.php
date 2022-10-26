<?php

namespace App\Http\Controllers;

use App\Models\Projek;
use App\Models\Siswa;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.masterProjects', [
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
        return view('admin.masterProjects.createProject', [
            'siswa' => Siswa::find($id)
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
            'max' => 'Maximal :max Kidz',
        ]);

        $validateData = $request->validate([
            'siswa_id' => 'required',
            'nama_projek' => 'required|max:100',
            'deskripsi' => 'required',
        ], $messages);

        $validateData['tanggal'] = now();

        Projek::create($validateData);
        return redirect('/masterprojects')->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.masterProjects.showProject', [
            'siswa' => Siswa::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.masterProjects.editProject', [
            'projek' => Projek::firstWhere('id', $id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = ([
            'required' => 'Isien le',
            'max' => 'Maximal :max Kidz',
        ]);

        $validateData = $request->validate([
            'nama_projek' => 'required|max:100',
            'deskripsi' => 'required'
        ], $messages);

        $validateData['tanggal'] = now();

        Projek::where('id', $id)->update($validateData);
        return redirect('/masterprojects')->with('success', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projek  $projek
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $id;
        Projek::destroy('id', $id);

        return redirect('/masterprojects')->with('delete', 'Data Berhasil Dihapus');
    }
}
