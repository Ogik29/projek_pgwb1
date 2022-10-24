@extends('layout/main')

@section('title')
Profil
@endsection

@section('content')

<!-- Jumbotron (Bootstrap V4) -->
<section class="jumbotron text-center">
    <img src="{{ asset('img/gambar profil.jpg') }}" alt="Dimas Ogi" width="200" class="rounded-circle img-thumbnail">
    <h1 class="display-4">Dimas Ogi Putra P</h1>
    <p class="lead">12 RPL 1/24</p>
</section>
<!-- Akhir Jumbotron (Bootstrap V4) -->

@endsection