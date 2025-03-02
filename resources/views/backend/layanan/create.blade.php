@extends('backend.layouts.master')
@section('title', 'Tambah Layanan')
@section('content_header')
    Tambah Layanan
@endsection
@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('layanan.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori Layanan</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($kategori as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Layanan</label>
                <input type="text" name="nama_layanan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_layanan" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
