@extends('layout/main')

@section('title')
Projects
@endsection

@section('content')

<!-- Gallery -->
<section id="gallery">
    <div class="container">
        <div class="row text-center">
            <div class="col mb-3">
                <h2>Projects</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{ asset('img/gambar1.jpg') }}" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{ asset('img/gambar2.jpg') }}" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="{{ asset('img/gambar3.png') }}" class="card-img-top" alt="gambar">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Gallery -->

@endsection