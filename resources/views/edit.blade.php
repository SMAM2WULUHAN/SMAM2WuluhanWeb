@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Edit Berita</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $news->judul }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $news->deskripsi }}</textarea>
        </div>

        <div class="form-group">
            <label for="gambar">Gambar</label>
            @if($news->gambar)
                <p>
                    <img src="{{ asset('storage/' . $news->gambar) }}" alt="Gambar" width="200">
                </p>
            @endif
            <input type="file" class="form-control-file" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
