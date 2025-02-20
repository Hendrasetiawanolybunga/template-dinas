@extends('backend.layouts.master')
@section('title', 'Edit Halaman Statis')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <form action="{{ route('halaman.update', $halaman->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" value="{{ $halaman->judul }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="konten">Konten</label>
                            <textarea name="konten" class="form-control" rows="5" required>{{ $halaman->konten }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
