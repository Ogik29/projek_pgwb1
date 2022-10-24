@extends('layout/main')

@section('title')
Contact
@endsection

@section('content')

<!-- Contact -->
<section id="contact" class="contact mb-5">
    <div class="container">
        <div class="row">
            <div class="col text-center mt-5">
                <h2>Contact me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Contact -->

@endsection