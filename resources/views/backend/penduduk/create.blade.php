@extends('backend.layouts.master')
@section('title', 'Tambah Penduduk')
@section('content_header')
    Manajemen Penduduk
@endsection

@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('penduduk.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_penduduk" class="form-label">Nama</label>
                <input type="text" name="nama_penduduk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat_penduduk" class="form-label">Alamat</label>
                <textarea name="alamat_penduduk" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('penduduk.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection