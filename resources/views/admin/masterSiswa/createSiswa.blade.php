@extends('admin.layout.mainAdmin')

@section('page')
    Add Data Siswa
@endsection

@section('title')
<!-- Begin Page Content -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Add Data Siswa</h1>
<!-- /.container-fluid -->
@endsection

@section('content')

    <div class="card-body">
        <form action="/mastersiswa" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="form-group">
                <span class="form-group-text">NISN</span>
                <input type="number" class="form-control" name="nisn" value="{{ old('nisn') }}">
                @error('nisn')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Nama</span>
                <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Alamat</span>
                <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">
                @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <label class="form-group-text">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Email</span>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" value="{{ old('foto') }}">
                @error('foto')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <span class="form-group-text">About</span>
                <textarea class="form-control" aria-label="With textarea" name="about">{{ old('about') }}</textarea>
                @error('about')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
            <a href="/mastersiswa" class="btn btn-danger mt-4">Back</a>
            <button type="submit" class="btn btn-info mt-4">Submit</button>
    
        </form>
    </div>

@endsection

