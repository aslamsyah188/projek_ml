@extends('dashboard.layouts.main')
@section('container')
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Berita</h3>
            </div>
            <form method="POST" action="/dashboard/berita">
            @csrf
            <div class="card-body">
                <div class="form-grup">
                    <label for="judul_berita">Judul Berita</label>
                    <input type="text" class="form-control @error ('judul_berita') is-invalid @enderror"
                    id="judul_berita" name="judul_berita" placeholder="Judul Berita">
                    @error('judul_berita')
                        <div class="invalid-feedback">
                            {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Berita">
            </div>
                <div class="form-grup mt-3">
                    <label for="category">Category</label>
                    <select class="custom-select rounded-0" id="category-id" name="category_id">
                        @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                    @endforeach 
                    </select>
                </div>
                <div class="form-grup mt-3">
                    <label for="isi_berita">Isi berita</label>
                    @error('isi_berita')
                        <P class="text-danger">
                            {{ $message }}
                        </p>
                    @enderror 
                    <textarea id="summernote" name="isi_berita"></textarea>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection 