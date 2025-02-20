@extends('frontend.layouts.app')

@section('title', 'Detail Berita')

@section('content')
<div class="container mt-4">
    <div class="card px-5 shadow">
        <div class="card-header text-center mb-0">
            <h2>{{ $berita->title }}</h2>
            <p class="text-muted">{{ $berita->created_at->format('d M Y') }}</p>
        </div>
        <div class="card-body">
            @if ($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" class="mb-1 rounded img-thumbnail" alt="Thumbnail">
            @endif
            <p class="justify-text lh-1">{!! $berita->content !!}</p>          
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('user.berita.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
