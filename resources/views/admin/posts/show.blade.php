@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Detail Post</h2>
    <div class="card">
        <div class="card-header">
            {{ $post->title }}
        </div>
        <div class="card-body">
            <p><strong>Kategori:</strong> {{ $post->category }}</p>
            <p><strong>Konten:</strong> {!! $post->content !!}</p>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post" width="300">
            @endif
        </div>
        <div class="card-footer">
            <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i> Kembali</a>
        </div>
    </div>
</div>
@endsection
