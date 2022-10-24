@extends('admin.layout.mainAdmin')

@section('page')
    Update Data Siswa
@endsection

@section('title')
<!-- Begin Page Content -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Update Data Siswa</h1>
<!-- /.container-fluid -->
@endsection

@section('content')

    <div class="card-body">
        <form action="/mastersiswa/{{ $siswa->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        
            <div class="form-group">
                <span class="form-group-text">NISN</span>
                <input type="number" class="form-control" name="nisn" value="{{ $siswa->nisn }}">
                @error('nisn')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Nama</span>
                <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}">
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Alamat</span>
                <input type="text" class="form-control" name="alamat" value="{{ $siswa->alamat }}">
                @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <label class="form-group-text">Jenis Kelamin</label>
                <select class="form-select" name="jenis_kelamin">
                <option value="Laki-Laki" @if ($siswa->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if ($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
                @error('jenis_kelamin')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <div class="form-group">
                <span class="form-group-text">Email</span>
                <input type="email" class="form-control" name="email" value="{{ $siswa->email }}">
                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
              
            <img src="{{ asset('storage/'.$siswa->foto) }}" alt="" width="50">
            <div class="form-group">
                <input type="file" class="form-control-file" name="foto" value="{{ $siswa->foto }}">
                @error('foto')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
        
            <div class="form-group">
                <span class="form-group-text">About</span>
                <textarea class="form-control" aria-label="With textarea" name="about">{{ $siswa->about }}</textarea>
                @error('about')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
    
            <a href="/mastersiswa/{{ $siswa->id }}" class="btn btn-danger mt-4">Back</a>
            <button type="submit" class="btn btn-info mt-4">Submit</button>
    
        </form>
    </div>

@endsection

