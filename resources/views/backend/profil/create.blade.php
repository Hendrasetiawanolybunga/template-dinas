@extends('backend.layouts.master')
@section('title', 'Tambah Profil')
@section('content')
    <div class="row">
        <div class="col--md-12">
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
                            <div class="mb-3">
                                <label class="form-label">Struktur Organisasi (Gambar)</label>
                                <input type="file" name="struktur_organisasi" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>

                        <!-- Kolom Kanan -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Visi</label>
                                <textarea class="form-control " name="visi" id="visi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Misi</label>
                            <textarea class="form-control " name="misi" id="misi"></textarea>
                        </div>
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
