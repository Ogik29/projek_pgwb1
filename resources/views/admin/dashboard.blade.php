@extends('admin.layout.mainAdmin')

@section('page')
    Dashboard
@endsection

@section('title')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

</div>
<!-- /.container-fluid -->
@endsection

@section('content')
    <h2 class="text-danger text-center"> Welcome {{ Auth::user()->name }} </h2>
@endsection