@extends('backend.layouts.master')
@section('title', 'Layanan')
@section('content_header')
    Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
            <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>
        </div>
    </div>
    <div class="card shadow p-4">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th width="200" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanans as $layanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $layanan->kategori->nama ?? '-' }}</td>
                        <td>{{ $layanan->nama }}</td>
                        <td class="text-center">
                            <a href="{{ route('layanan.show', $layanan->id) }}" class="btn btn-info btn-sm">
                                <i class="ri-eye-line"></i>
                            </a>
                            <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning btn-sm">
                                <i class="ri-file-edit-line"></i>
                            </a>
                            <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
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
