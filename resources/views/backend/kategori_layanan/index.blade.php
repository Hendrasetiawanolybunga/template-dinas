@extends('backend.layouts.master')
@section('title', 'Manajemen Kategori Layanan')
@section('content_header')
    Manajemen Kategori Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('kategori_layanan.create') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
        </div>
    </div>
    <div class="card shadow p-4">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $k)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $k->nama_kategori }}</td>
                        <td>{{ $k->deskripsi ?? '-' }}</td>
                        <td class="text-center">
                            <a href="{{ route('kategori_layanan.edit', $k->id) }}" class="btn btn-warning btn-sm">
                                <i class="ri-file-edit-line"></i>
                            </a>
                            <form action="{{ route('kategori_layanan.destroy', $k->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus kategori ini?')">
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
