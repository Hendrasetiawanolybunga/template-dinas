@extends('backend.layouts.master')
@section('title', 'Detail Highlights')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-3 p-4">
                <h2 class="mb-4">Detail Highlight</h2>
                <p><strong>Judul:</strong> {{ $highlight->title }}</p>
                <p><strong>Deskripsi:</strong> {{ $highlight->description }}</p>
                <a href="{{ route('highlights.index') }}" class="btn btn-secondary rounded-pill shadow-sm">Kembali</a>
            </div>
        </div>
    </div>
@endsection
