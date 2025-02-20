@extends('backend.layouts.master')
@section('title', 'Edit Post')
@section('content')
    <div class="row">
        <div class="col--md-12">
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

                <div class="form-group mb-2">
                    <label for="content">Konten</label>
                    <textarea class="form-control " name="content" id="konten">{{ $post->content }}</textarea>
                </div>     


                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Gambar Post" width="100">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan
                    Perubahan</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa-solid fa-xmark"></i> Batal</a>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea#konten'
        });
    </script>
@endsection
