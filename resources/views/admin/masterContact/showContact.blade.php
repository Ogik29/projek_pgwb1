@if ($siswa->kontak->isEmpty())

Siswa Belum Memiliki Kontak

@else

<div class="card shadow col">
    <div class="card-body">
        @foreach ($siswa->kontak as $k)
            <p class="mb-3"> - {{ $k->jenis_kontak }}: {{ $k->pivot->deskripsi }} </p>
            <a href="/mastercontact/{{ $k->pivot->id }}/edit" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a>
            <form action="/mastercontact/{{ $k->pivot->id }}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn-danger btn-circle" onclick="return confirm('Yakin Kidz?')"><i class="fas fa-backspace"></i></button>
            </form>
            <hr>
        @endforeach
    </div>
</div>

@endif