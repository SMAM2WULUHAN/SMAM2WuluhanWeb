@extends('layouts.app1')

@section('content')
<!-- berita -->
<div class="row mt-4 text-center">
    <h2>BERITA TERKINI</h2>
</div>
<div class="row d-flex justify-content-center gap-4">
@foreach ($berita as $item)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset($item->gambar) }}" class="img-fluid rounded-start" alt="News Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->judul }}</h5>
                    <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                    <a href="{{ route('berita.detail', $item->id) }}" class="btn btn-secondary">Read More</a>
                    
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection