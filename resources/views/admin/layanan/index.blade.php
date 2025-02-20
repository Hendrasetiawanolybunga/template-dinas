@extends('layouts.admin')
@section('content_header')
    <span>Layanan</span>
@endsection
@section('content')
<a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>
    <div class="card shadow p-4">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($layanans as $layanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $layanan->kategori->nama ?? '-' }}</td>
                        <td>{{ $layanan->nama }}</td>
                        <td>
                            <a href="{{ route('layanan.show', $layanan->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('layanan.edit', $layanan->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('layanan.destroy', $layanan->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
