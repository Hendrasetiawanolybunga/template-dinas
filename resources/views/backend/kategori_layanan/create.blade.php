@extends('backend.layouts.master')
@section('title', 'Tambah Kategori Layanan')
@section('content_header')
    Kategori Layanan/Tambah
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
            <a href="{{ route('kategori-layanan.index') }}" class="btn btn-secondary mb-3">Kembali</a>

            <form action="{{ route('kategori-layanan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
