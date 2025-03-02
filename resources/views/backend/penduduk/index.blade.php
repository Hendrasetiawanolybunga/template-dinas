@extends('backend.layouts.master')
@section('title', 'Manajemen Penduduk')
@section('content_header')
    Manajemen Penduduk
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
            <a href="{{ route('penduduk.create') }}" class="btn btn-primary mb-3">Tambah Penduduk</a>
        </div>
    </div>
    <div class="card shadow p-4">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduk as $p)
                    <tr>
                        <td  class="text-center">{{$loop->iteration}}</td>
                        <td>{{ $p->nama_penduduk }}</td>
                        <td>{{ $p->alamat_penduduk }}</td>
                        <td>{{ $p->tanggal_lahir }}</td>
                        <td>{{ $p->jenis_kelamin }}</td>
                        <td  class="text-center">
                            <a href="{{ route('penduduk.show', $p->id) }}" class="btn btn-info btn-sm">
                              <i class="ri-eye-line"></i>
                            </a>
                            <a href="{{ route('penduduk.edit', $p->id) }}" class="btn btn-warning btn-sm">  
                            <i class="ri-file-edit-line"></i>
                            </a>
                            <form action="{{ route('penduduk.destroy', $p->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
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
