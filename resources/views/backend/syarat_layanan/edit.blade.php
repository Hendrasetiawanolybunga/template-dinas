@extends('backend.layouts.master')
@section('title', 'Edit Syarat Layanan')
@section('content_header')
    Edit Syarat Layanan
@endsection
@section('content')
    <div class="card shadow p-4">
        <form action="{{ route('syarat_layanan.update', $syarat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="id_layanan" class="form-label">Layanan</label>
                <select name="id_layanan" id="id_layanan" class="form-control" required>
                    <option value="">Pilih Layanan</option>
                    @foreach ($layanan as $l)
                        <option value="{{ $l->id }}" {{ $syarat->id_layanan == $l->id ? 'selected' : '' }}>{{ $l->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="persyaratan" class="form-label">Persyaratan</label>
                <textarea name="persyaratan" id="persyaratan" class="form-control" rows="3" required>{{ $syarat->persyaratan }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('syarat_layanan.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
