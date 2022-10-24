@extends('admin.layout.mainAdmin')

@section('page')
    Siswa Detail
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Siswa Detail</h1>

<!-- /.container-fluid -->
@endsection

@section('content')
    <div class="row">
        <div class="card col-lg-3">
            <img src="{{ asset('storage/'.$siswa->foto) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nama: {{ $siswa->nama }}</h5>
              <p class="card-text">
                Nisn: {{ $siswa->nisn }} <br> 
                Gender: {{ $siswa->jenis_kelamin }} <br>
                Email: {{ $siswa->email }} <br>
                Alamat: {{ $siswa->alamat }} <br>
              </p>
            </div>
            <div class="card-body">
                <a href="/mastersiswa" class="btn btn-danger">Back</a>
                <a href="/mastersiswa/{{ $siswa->id }}/edit" class="btn btn-info">Update</a>
            </div>
        </div>
    
        <div class="col-lg-9">
            <div class="card mb-2">
                <div class="card-body">
                    <p>About: {{ $siswa->about }}</p>           
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="#" class="btn btn-info">Projects</a>                
                </div>
            </div>
        </div>

        <div class="card col-lg-3 mt-2">
            <div class="card-body">
                <p class="card-text">Contact: <br>
                    @foreach ($siswa->kontak as $k)
                        {{ $k->jenis_kontak }}: {{ $k->pivot->deskripsi }} <br> {{-- harus menggunakan pivot --}}
                    @endforeach
                </p>                
            </div>
        </div>

    </div>
    
@endsection