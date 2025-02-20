@extends('backend.layouts.master')
@section('title', 'Edit Profil')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow rounded p-4">
                <form action="{{ route('profil.update', $profil->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Dinas</label>
                                <input type="text" name="nama_dinas" class="form-control"
                                    value="{{ $profil->nama_dinas }}" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" required>{{ $profil->alamat }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Telepon</label>
                                <input type="text" name="telepon" class="form-control" value="{{ $profil->telepon }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $profil->email }}"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Struktur Organisasi (Gambar)</label>
                                <input type="file" name="struktur_organisasi" class="form-control">
                                @if ($profil->struktur_organisasi)
                                    <img src="{{ asset('storage/' . $profil->struktur_organisasi) }}"
                                        class="img-thumbnail mt-2" width="100">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Visi</label>
                                <textarea class="form-control " name="visi" id="visi">{{ $profil->visi }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Misi</label>
                                <textarea class="form-control " name="misi" id="misi">{{ $profil->misi }}</textarea>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea#visi'
        });
        tinymce.init({
            selector: 'textarea#misi'
        });
    </script>
@endsection
