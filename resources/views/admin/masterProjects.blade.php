@extends('admin.layout.mainAdmin')

@section('page')
    Master Projects
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master Projects</h1>

<!-- /.container-fluid -->
@endsection

@section('content')

{{-- flash message --}}
@if (session()->has('success'))
    <p class="text-success">{{ session('success') }}</p>
@endif

@if (session()->has('delete'))
    <p class="text-danger">{{ session('delete') }}</p>
@endif

<div class="row">

    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama Siswa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($siswa as $s)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $s->nisn }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>
                                    <a onclick="show({{ $s->id }})" class="btn btn-info btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    {{-- <a href="/masterprojects/{{ $s->id }}" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a> --}}
                                    <a href="/masterprojects/create/{{ $s->id }}" class="btn btn-warning btn-circle"><i class="fas fa-plus"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Project Siswa</h6>
            </div>
            <div class="card-body" id="projek">
                <div class="table-responsive">
                    Pilih Projek Siswa Terlebih Dahulu
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    function show(id) {
            $.get('/masterprojects/' + id + '/show', function(projek) {
                $('#projek').html(projek);
            })
        }
</script>

@endsection