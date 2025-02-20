@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Kategori Layanan</h2>
    <a href="{{ route('kategori-layanan.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <form action="{{ route('kategori-layanan.update', $kategoriLayanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Kategori</label>
            <input type="text" name="nama" class="form-control" value="{{ $kategoriLayanan->nama }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
