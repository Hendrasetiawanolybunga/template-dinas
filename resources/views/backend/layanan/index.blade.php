@extends('backend.layouts.master')
@section('title', 'Manajemen Layanan')
@section('content_header')
    Manajemen Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>
        </div>
    </div>
    <div class="card shadow p-4">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama Layanan</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanan as $l)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $l->nama_layanan }}</td>
                        <td>{{ $l->kategori->nama_kategori ?? '-' }}</td>
                        <td>{{ $l->deskripsi_layanan ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-warning btn-sm">
                                <i class="ri-file-edit-line"></i>
                            </a>
                            <form action="{{ route('layanan.destroy', $l->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan ini?')">
                                    <i class="ri-delete-bin-6-line"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
