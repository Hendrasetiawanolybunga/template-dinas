@extends('backend.layouts.master')
@section('title', 'Detail Post')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p><strong>Kategori:</strong> {{ $post->category }}</p>
                    <strong>Konten:</strong>
                    <p>
                        {!! $post->content !!}
                    </p>
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post" class="image" width="200">
                    @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>
                        Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
