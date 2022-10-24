@extends('admin.layout.mainAdmin')

@section('page')
    Create Contact
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Contact</h1>

<!-- /.container-fluid -->
@endsection


@section('content')
<div class="col-lg-8">

    <form action="/mastercontact" method="post">
        @csrf
        
        {{-- mengirim data field siswa_id --}}
        <input type="hidden" value="{{ $siswa->id }}" name="siswa_id">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Jenis Kontak</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="jenis_kontak_id">
              <option selected>Pilih Jenis Kontak</option>
              @foreach ($jenis_kontak as $jk)
              <option value="{{ $jk->id }}">{{ $jk->jenis_kontak }}</option>
              @endforeach
            </select>
            @error('jenis_kontak_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi kontak</label>
            <input type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi Kontak" value="{{ old('deskripsi') }}">
            @error('deskripsi')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="/mastercontact" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
@endsection