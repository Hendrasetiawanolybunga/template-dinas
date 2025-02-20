@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg rounded-3 p-4">
        <h2 class="mb-4">Detail Highlight</h2>
        <p><strong>Judul:</strong> {{ $highlight->title }}</p>
        <p><strong>Deskripsi:</strong> {{ $highlight->description }}</p>
        <a href="{{ route('highlights.index') }}" class="btn btn-secondary rounded-pill shadow-sm">Kembali</a>
    </div>
</div>
@endsection
