@extends('backend.layouts.master')
@section('title', 'Tambah Halaman Statis')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <form action="{{ route('halaman.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="judul">Judul</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="konten">Konten</label>
                            <textarea name="konten" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
