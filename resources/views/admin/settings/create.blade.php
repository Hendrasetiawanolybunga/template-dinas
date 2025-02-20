@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Tambah Pengaturan</h3>
    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="app_name" class="form-label">Nama Aplikasi</label>
            <input type="text" class="form-control" id="app_name" name="app_name" required>
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
        </div>

        <div class="mb-3">
            <label for="favicon" class="form-label">Favicon</label>
            <input type="file" class="form-control" id="favicon" name="favicon">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('settings.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
