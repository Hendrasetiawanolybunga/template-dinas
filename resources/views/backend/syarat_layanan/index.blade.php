@extends('backend.layouts.master')
@section('title', 'Manajemen Syarat Layanan')
@section('content_header')
    Manajemen Syarat Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('syarat_layanan.create') }}" class="btn btn-primary mb-3">Tambah Syarat</a>
        </div>
    </div>
    <div class="card shadow p-4">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Layanan</th>
                    <th>Persyaratan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($syarat as $s)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $s->layanan->nama_layanan }}</td>
                        <td>{{ $s->persyaratan }}</td>
                        <td class="text-center">
                            <a href="{{ route('syarat_layanan.edit', $s->id) }}" class="btn btn-warning btn-sm">
                                <i class="ri-file-edit-line"></i>
                            </a>
                            <form action="{{ route('syarat_layanan.destroy', $s->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus syarat ini?')">
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
