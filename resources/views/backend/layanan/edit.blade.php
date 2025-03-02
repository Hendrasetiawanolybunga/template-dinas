@extends('backend.layouts.master')
@section('title', 'Edit Layanan')
@section('content_header')
    Edit Layanan
@endsection
@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id_kategori" class="form-label">Kategori Layanan</label>
                <select name="id_kategori" id="id_kategori" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $k)
                        <option value="{{ $k->id }}" {{ $layanan->id_kategori == $k->id ? 'selected' : '' }}>
                            {{ $k->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Layanan</label>
                <input type="text" name="nama" class="form-control" value="{{ $layanan->nama_layanan }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $layanan->deskripsi_layanan }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('layanan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
