@extends('admin.layout.mainAdmin')

@section('page')
    Show Contact Type
@endsection

@section('title')
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Show Contact Type</h1>

<!-- /.container-fluid -->
@endsection


@section('content')

<div class="col-lg-8">

    {{-- flash message --}}
    @if (session()->has('success'))
    <p class="text-success">{{ session('success') }}</p>
    @endif

    @if (session()->has('delete'))
    <p class="text-danger">{{ session('delete') }}</p>
    @endif

    <a href="/mastercontact" class="btn btn-danger mb-3">Back</a>
    <a href="/mastercontact/add_contact_type/iya" class="btn btn-info mb-3">Add Contact Type</a>
    
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Contact Type</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kontak</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($jenis_kontak as $jk)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $jk->jenis_kontak }}</td>
                                    <td>
                                        <a href="/mastercontact/{{ $jk->id }}/edit_contact_type/iya" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>
                                        <form action="/mastercontact/{{ $jk->id }}/delete_jenis" method="POST" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn-danger btn-circle" onclick="return confirm('Yakin Kidz?')"><i class="fas fa-backspace"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection