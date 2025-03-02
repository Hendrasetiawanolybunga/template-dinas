@extends('backend.layouts.master')
@section('title', 'Edit Kategori Layanan')
@section('content_header')
    Edit Kategori Layanan
@endsection
@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('kategori_layanan.update', $kategori_layanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori_layanan->nama_kategori }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $kategori_layanan->deskripsi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('kategori_layanan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
