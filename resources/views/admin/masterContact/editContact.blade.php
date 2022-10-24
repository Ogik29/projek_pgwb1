@extends('admin.layout.mainAdmin')

@section('page')
    Edit Project
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit {{ $kontak_siswa->jenis_kontak->jenis_kontak }} Of {{ $kontak_siswa->siswa_kontak->nama }} </h1>

<!-- /.container-fluid -->
@endsection

@section('content')
<div class="col-lg-8">

    <form action="/mastercontact/{{ $kontak_siswa->id }}" method="post">
        @csrf
        @method('PUT')

        {{-- <input type="hidden" name="siswa_id" value="{{ $kontak_siswa->siswa_kontak->id }}"> --}}

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi kontak</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi Kontak" value="{{ $kontak_siswa->deskripsi }}">
            @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="/mastercontact" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@endsection