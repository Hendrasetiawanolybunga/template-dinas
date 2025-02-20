@extends('layouts.admin')

@section('title', 'Edit Profil Dinas')

@section('content_header')
    <span>Edit Profil Dinas</span>
@endsection

@section('content')
    <div class="card shadow rounded p-4">
        <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Dinas</label>
                        <input type="text" name="nama_dinas" class="form-control" value="{{ $profil->nama_dinas }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" required>{{ $profil->alamat }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Telepon</label>
                        <input type="text" name="telepon" class="form-control" value="{{ $profil->telepon }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ $profil->email }}" required>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Visi</label>
                        <div id="editor-visi"></div>
                        <input type="hidden" name="visi" id="input-visi" value="{{ $profil->visi }}">
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Misi</label>
                        <div id="editor-misi"></div>
                        <input type="hidden" name="misi" id="input-misi" value="{{ $profil->misi }}">
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label">Struktur Organisasi (Gambar)</label>
                        <input type="file" name="struktur_organisasi" class="form-control">
                        @if ($profil->struktur_organisasi)
                            <img src="{{ asset('storage/' . $profil->struktur_organisasi) }}" class="img-thumbnail mt-2" width="100">
                        @endif
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
