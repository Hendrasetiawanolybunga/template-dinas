@extends('layouts.admin')
@section('title', 'Detail Hal. Statis')
@section('content_header')
    <span>Detail Halaman Statis</span>
@endsection
@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">
            <h3>{{ $halaman->judul }}</h3>
            <p><strong>Slug:</strong> {{ $halaman->slug }}</p>
            <p><strong>Konten:</strong></p>
            <p>{!! nl2br(e($halaman->konten)) !!}</p>
            <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
            
        </div>
    </div>
@endsection
