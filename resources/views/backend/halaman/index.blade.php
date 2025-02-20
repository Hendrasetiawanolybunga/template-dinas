@extends('backend.layouts.master')
@section('title', 'Halaman Statis')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <a href="{{ route('halaman.create') }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus"></i>
                        Tambah Halaman</a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th class="text-center" width="200">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($halaman as $h)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $h->judul }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('halaman.show', $h->id) }}" class="btn btn-info btn-sm">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('halaman.edit', $h->id) }}" class="btn btn-warning btn-sm">
                                            <i class="ri-file-edit-line"></i>
                                        </a>
                                        <form action="{{ route('halaman.destroy', $h->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
            </div>
        </div>
    </div>
@endsection
