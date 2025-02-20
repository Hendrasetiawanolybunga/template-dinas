@extends('layouts.admin')
@section('title', 'Highlights')
@section('content_header')
    <span>Daftar Highlights</span>
@endsection

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">
            <a href="{{ route('highlights.create') }}" class="btn btn-primary mb-3">+ Tambah Highlight</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover rounded-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($highlights as $key => $highlight)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $highlight->title }}</td>
                                <td>{{ Str::limit($highlight->description, 50) }}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{ route('highlights.show', $highlight->id) }}" class="btn btn-info btn-sm">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('highlights.edit', $highlight->id) }}"
                                        class="btn btn-warning btn-sm ml-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('highlights.destroy', $highlight->id) }}" method="POST"
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
        </div>
    </div>
@endsection
