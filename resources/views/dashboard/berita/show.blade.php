@extends('dashboard.layouts.main')
@section ('container')
    <div class="content-header">
        <div class="card-body">
            <article>
                <h4 class="mb-3">{{ $berita->judul_berita }}</h4><hr style="background-color: white">
                <p>{!! $berita->isi_berita !!}</p>
                <a href="/dashboard/berita" class="btn btn-success">Kembali ke Berita Utama</a>
                <a href="/dashboard/berita/{{ $berita->id }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/berita/{{ $berita->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('yakin akan menghapus data?')">Hapus</button>
                  </form>
            </article>
        </div>
    </div>
@endsection