@extends('layouts.admin')

@section('title', 'Post')

@section('content_header')
    <span>Daftar Post</span>
@endsection

@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">
            <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Tambah Post</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-hover rounded-3">
                    <thead>
                        <tr>
                            <th width="50" class="text-center">#</th>
                            <th>Judul</th>
                            <th>Konten</th>
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
                                <td>{!! Str::limit($post->content, 100, '...') !!}</td>
                                <td>{{ ucfirst($post->category) }}</td>
                                <td class="text-center">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post" width="25"
                                            class="img-thumbnail rounded">
                                        `
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center  align-items-center">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning mx-2 btn-sm"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-delete btn-sm"><i
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

    {{-- {{ $posts->links() }} --}}


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".btn-delete").forEach(button => {
                button.addEventListener("click", function() {
                    let form = this.closest("form");

                    Swal.fire({
                        title: "Yakin ingin menghapus?",
                        text: "Data yang dihapus tidak bisa dikembalikan!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

@endsection
