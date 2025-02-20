@extends('layouts.admin')
@section('title', 'Kategori Layanan')
@section('content_header')
    <span>Daftar Kategori Layanan</span>
@endsection
@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-header bg-primary">
            <a href="{{ route('kategori-layanan.create') }}" class="btn btn-sm shadow btn-success"><i
                    class="fas fa-plus"></i> Tambah Kategori</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width="100">#</th>
                        <th>Nama Kategori</th>
                        <th class="text-center" width="100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategoriLayanan as $index => $kategori)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $kategori->nama }}</td>
                            <td class="text-center">
                                <a href="{{ route('kategori-layanan.edit', $kategori->id) }}"
                                    class="btn btn-sm btn-warning">
                                    <i class="fas fa-pencil"></i>
                                </a>
                                <form action="{{ route('kategori-layanan.destroy', $kategori->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
