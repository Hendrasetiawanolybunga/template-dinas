@extends('layouts.admin')
@section('title', 'Hal. Statis')
@section('content_header')
    <span>Daftar Halaman Statis</span>
@endsection
@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">
            <a href="{{ route('halaman.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i> Tambah Halaman</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th class="text-center" width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($halaman as $h)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $h->judul }}</td>
                            <td class="text-center">
                                <a href="{{ route('halaman.show', $h->id) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('halaman.edit', $h->id) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-pencil"></i>
                                </a>
                                <form action="{{ route('halaman.destroy', $h->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
