@extends('layouts.app1')

@section('content')
<div class="container mt-4">
    <h1>{{ $berita->judul }}</h1>
    <img src="{{ asset($berita->gambar) }}" alt="News Image" class="img-fluid">
    <p class="text-muted">{{ $berita->tanggal }}</p>
    <p>{{ $berita->deskripsi }}</p>
    <a href="{{ route('berita') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
