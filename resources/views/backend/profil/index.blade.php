@extends('backend.layouts.master')
@section('title', 'Profil')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <a href="{{ route('profil.create') }}" class="btn btn-primary mb-3">Tambah Profil</a>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card shadow-sm rounded p-3">
                <table class="table table-striped table-hover rounded-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dinas</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th witdh="200" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profil as $key => $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama_dinas }}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>{{ $p->telepon }}</td>
                                <td class="text-center">
                                    <a href="{{ route('profil.show', $p->id) }}" class="btn btn-info btn-sm">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                    <a href="{{ route('profil.edit', $p->id) }}" class="btn btn-warning btn-sm">
                                        <i class="ri-file-edit-line"></i>
                                    </a>
                                    <form action="{{ route('profil.destroy', $p->id) }}" method="POST"
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

                <div class="d-flex justify-content-center mt-3">
                    {{ $profil->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
