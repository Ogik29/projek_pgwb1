@extends('admin.layout.mainAdmin')

@section('page')
    Master Siswa
@endsection

@section('title')
<!-- Begin Page Content -->
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master Siswa</h1>
<!-- /.container-fluid -->
@endsection


@section('content')

<a href="/mastersiswa/create" class="btn btn-info mb-5">Add Siswa</a>

{{-- flash message --}}
@if (session()->has('success'))
    <p class="text-success">{{ session('success') }}</p>
@endif

@if (session()->has('delete'))
    <p class="text-danger">{{ session('delete') }}</p>
@endif

<!-- DataTales Example -->
<div class="card shadow mb-4 col-md-12">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    @foreach ($siswa as $s)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->nisn }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->email }}</td>
                        <td>
                            <a href="/mastersiswa/{{ $s->id }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a> {{-- detail --}}
                            <a href="/mastersiswa/{{ $s->id }}/edit" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a> {{-- edit --}}
                            <form action="/mastersiswa/{{ $s->id }}" method="POST" class="d-inline"> {{-- delete --}}
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-circle" onclick="return confirm('Yakin Kidz?')"><i class="fas fa-backspace"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
                            
@endsection
