@extends('admin.layout.mainAdmin')

@section('page')
    Create Project
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Project</h1>

<!-- /.container-fluid -->
@endsection


@section('content')
<div class="col-lg-8">

    <form action="/masterprojects" method="post">
        @csrf
        {{-- <div class="form-group">
            <label>Siswa</label>
            <select class="custom-select" name="siswa_id" id="inputGroupSelect04" aria-label="Example select with button addon">
              <option selected value="">Nama siswa</option>
              @foreach ($siswa as $s)
              <option value="{{ $s->id }}">{{ $s->nama }}</option>
              @endforeach
            </select>
            @error('siswa_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div> --}}
        
        {{-- mengirim data field siswa_id --}}
        <input type="hidden" value="{{ $siswa->id }}" name="siswa_id">

        <div class="form-group mb-3">
            <label for="nama_projek">Nama Projek</label>
            <input type="text" class="form-control" name="nama_projek" id="nama_projek" placeholder="Nama projek" value="{{ old('nama_projek') }}">
            @error('nama_projek')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="/masterprojects" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
@endsection