@extends('backend.layouts.master')
@section('title', 'Tambah Post')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="title">Judul</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                placeholder="Masukkan judul post" required>
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="content">Konten</label>
                            <textarea class="form-control " name="content" id="konten"></textarea>
                        </div>                       
                        <div class="form-group mb-2">
                            <label for="image">Gambar</label>
                            <input type="file" name="image"
                                class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="category">Kategori</label>
                            <select name="category" class="form-control @error('category') is-invalid @enderror">
                                <option value="news">News</option>
                                <option value="announcement">Announcement</option>
                            </select>
                            @error('category')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                            <button type="submit" class="btn btn-primary"><i class="ri-save-3-fill"></i> Simpan</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-danger"><i class="ri-corner-up-left-double-line"></i> Batal</a>
                    </form>
                </div>
            </div>
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
