@extends('backend.layouts.master')
@section('title', 'Kategori Layanan')
@section('content_header')
    Kategori Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
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
                                <th class="text-center" width="150">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategoriLayanan as $index => $kategori)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $kategori->nama }}</td>                                  
                                    <td class="text-center">                                 
                                        <a href="{{ route('kategori-layanan.edit', $kategori->id) }}" class="btn btn-warning btn-sm">
                                            <i class="ri-file-edit-line"></i>
                                        </a>
                                        <form action="{{ route('kategori-layanan.destroy', $kategori->id) }}" method="POST"
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
            </div>
        </div>
    </div>
@endsection
