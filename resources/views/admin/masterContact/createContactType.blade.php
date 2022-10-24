@extends('admin.layout.mainAdmin')

@section('page')
    Create Contact Type
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Create Contact Type</h1>

<!-- /.container-fluid -->
@endsection


@section('content')
<div class="col-lg-8">

    <form action="/mastercontact/add_contact_type/rill" method="post">
        @csrf

        <div class="form-group mb-3">
            <label for="deskripsi">Jenis kontak</label>
            <input type="text" name="jenis_kontak" class="form-control" id="jenis_kontak" placeholder="Jenis Kontak" value="{{ old('jenis_kontak') }}">
            @error('jenis_kontak')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <a href="/mastercontact/show_contact_type/iya" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>

</div>
@endsection