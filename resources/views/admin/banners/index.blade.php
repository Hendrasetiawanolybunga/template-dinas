@extends('layouts.admin')

@section('title', 'Banner')

@section('content_header')
    <span>Daftar Banner</span>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
        <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
            <div class="card-body">
                <a href="{{ route('banners.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah
                    Banner</a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover rounded-3">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>{{ Str::limit($banner->description, 100, '...') }}</td>
                                    <td class="text-center">
                                        @if ($banner->image)
                                            <img src="{{ asset('storage/' . $banner->image) }}" alt="Gambar Banner"
                                                width="40" class="img-thumbnail rounded">
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('banners.show', $banner->id) }}" class="btn btn-info btn-sm">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('banners.edit', $banner->id) }}"
                                            class="btn btn-warning btn-sm ml-2">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                                            class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-delete btn-sm ml-2"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $banners->links() }}
                </div>

            </div>
        </div>


@endsection
