@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select name="category" class="form-control">
                    <option value="news" {{ $post->category == 'news' ? 'selected' : '' }}>News</option>
                    <option value="announcement" {{ $post->category == 'announcement' ? 'selected' : '' }}>Announcement
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <div id="editor"></div>
                <input type="hidden" name="content" id="hiddenContent" value="{!! htmlspecialchars_decode($post->content) !!}">

            </div>


            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan Perubahan</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa-solid fa-xmark"></i> Batal</a>
        </form>
    </div>
@endsection
