@extends('backend.layouts.master')
@section('title', 'Edit Kategori Layanan')
@section('content_header')
    Kategori Layanan/Edit
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
            <form action="{{ route('kategori-layanan.update', $kategoriLayanan->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama Kategori</label>
                    <input type="text" name="nama" class="form-control" value="{{ $kategoriLayanan->nama }}" required>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('kategori-layanan.index') }}" class="btn btn-danger"><i
                            class="ri-corner-up-left-double-line"></i> Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
