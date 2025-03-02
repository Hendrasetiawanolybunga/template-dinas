@extends('backend.layouts.master')
@section('title', 'Tambah Kategori Layanan')
@section('content_header')
    Tambah Kategori Layanan
@endsection
@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('kategori_layanan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori_layanan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
