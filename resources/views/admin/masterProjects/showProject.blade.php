@if ($siswa->projek->isEmpty())

Siswa Belum Memiliki Projek

@else

<div class="card shadow col">
    <div class="card-body">
        @foreach ($siswa->projek as $p)
            - {{ $p->nama_projek }} <br>
            <div class="card-body">
                Deskripsi: {{ $p->deskripsi }} <br>
                <small class="text-danger">Date: {{ $p->tanggal }}</small>  
            </div>
            <a href="/masterprojects/{{ $p->id }}/edit" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>
            <form action="/masterprojects/{{ $p->id }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-danger btn-circle" onclick="return confirm('Yakin Kidz?')"><i class="fas fa-backspace"></i></button>
            </form>
            <hr>
        @endforeach
    </div>
</div>

@endif