@extends('admin.layout.mainAdmin')

@section('page')
    Create Project
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Edit Project</h1>

<!-- /.container-fluid -->
@endsection


@section('content')
<div class="col-lg-8">

    <form action="/masterprojects/{{ $projek->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="nama_projek">Nama Projek</label>
            <input type="text" class="form-control" name="nama_projek" id="nama_projek" placeholder="Nama projek" value="{{ $projek->nama_projek }}">
            @error('nama_projek')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ $projek->deskripsi }}</textarea>
            @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="/masterprojects" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@endsection