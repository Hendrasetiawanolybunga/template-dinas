@extends('layouts.admin')

@section('title', 'Tambah Profil Dinas')

@section('content_header')
    <span>Tambah Profil Dinas</span>
@endsection

@section('content')
    <div class="card shadow rounded p-4">
        <form action="{{ route('profil.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Dinas</label>
                        <input type="text" name="nama_dinas" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" name="telepon" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Visi</label>
                        <div id="editor-visi"></div>
                        <input type="hidden" name="visi" id="input-visi">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Misi</label>
                        <div id="editor-misi"></div>
                        <input type="hidden" name="misi" id="input-misi">
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label">Struktur Organisasi (Gambar)</label>
                        <input type="file" name="struktur_organisasi" class="form-control">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
