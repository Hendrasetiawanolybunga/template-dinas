@extends('backend.layouts.master')
@section('title', 'Posts')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah
                        Post</a>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-hover rounded-3">
                            <thead>
                                <tr>
                                    <th width="50" class="text-center">#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th width="100" class="text-center">Gambar</th>
                                    <th width="200" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ ucfirst($post->category) }}</td>
                                        <td class="text-center">
                                            @if ($post->image)
                                                <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post"
                                                    width="25" class="img-thumbnail rounded">
                                                `
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                                                <i class="ri-file-edit-line"></i>
                                            </a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
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
    {{-- {{ $posts->links() }} --}}



@endsection
