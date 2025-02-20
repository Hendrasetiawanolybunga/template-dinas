@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>{{ isset($banner) ? 'Edit Banner' : 'Tambah Banner' }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ isset($banner) ? route('banners.update', $banner->id) : route('banners.store') }}" 
                  method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($banner))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" id="title" class="form-control" 
                           value="{{ isset($banner) ? $banner->title : old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" class="form-control" required>{{ isset($banner) ? $banner->description : old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @if(isset($banner) && $banner->image)
                        <img src="{{ asset('storage/' . $banner->image) }}" width="150" class="mt-2 img-thumbnail">
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">{{ isset($banner) ? 'Update' : 'Simpan' }}</button>
                <a href="{{ route('banners.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
