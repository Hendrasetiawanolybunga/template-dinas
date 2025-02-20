@extends('backend.layouts.master')
@section('title', 'Highlights')
@section('content')
    <div class="row">
        <div class="col-md-12">
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
                                    <th class="text-center" width="200">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($highlights as $key => $highlight)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $highlight->title }}</td>
                                        <td>{{ Str::limit($highlight->description, 50) }}</td>                                  
                                        <td class="text-center">
                                            <a href="{{ route('highlights.show', $highlight->id) }}" class="btn btn-info btn-sm">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('highlights.edit', $highlight->id) }}" class="btn btn-warning btn-sm">
                                                <i class="ri-file-edit-line"></i>
                                            </a>
                                            <form action="{{ route('highlights.destroy', $highlight->id) }}" method="POST"
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
    </div>
@endsection
