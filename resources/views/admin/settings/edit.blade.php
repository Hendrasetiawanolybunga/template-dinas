@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Edit Pengaturan</h3>
    <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="app_name" class="form-label">Nama Aplikasi</label>
            <input type="text" class="form-control" id="app_name" name="app_name" value="{{ $setting->app_name }}" required>
        </div>

        <div class="mb-3">
            <label for="logo" class="form-label">Logo</label>
            <input type="file" class="form-control" id="logo" name="logo">
            @if($setting->logo)
                <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" class="img-thumbnail mt-2" width="100">
            @endif
        </div>

        <div class="mb-3">
            <label for="favicon" class="form-label">Favicon</label>
            <input type="file" class="form-control" id="favicon" name="favicon">
            @if($setting->favicon)
                <img src="{{ asset('storage/' . $setting->favicon) }}" alt="Favicon" class="img-thumbnail mt-2" width="50">
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('settings.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
