@extends('layouts.admin')

@section('title', 'Tambah Post')

@section('content_header')
    <h1>Tambah Post</h1>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        placeholder="Masukkan judul post" required>
                    @error('title')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>



                <div class="form-group">
                    <label for="content">Konten</label>
                    <div id="editor"></div>
                    <input type="hidden" name="content" id="hiddenContent">
                </div>



                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="category">Kategori</label>
                    <select name="category" class="form-control @error('category') is-invalid @enderror">
                        <option value="news">News</option>
                        <option value="announcement">Announcement</option>
                    </select>
                    @error('category')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                <a href="{{ route('posts.index') }}" class="btn btn-secondary"><i class="fa-solid fa-xmark"></i> Batal</a>
            </form>
        </div>
    </div>
@endsection
