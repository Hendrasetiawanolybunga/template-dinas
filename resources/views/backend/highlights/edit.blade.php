@extends('backend.layouts.master')
@section('title', 'Edit Highlights')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded-3 p-4">
                <h2 class="mb-4">{{ isset($highlight) ? 'Edit' : 'Tambah' }} Highlight</h2>
                <form
                    action="{{ isset($highlight) ? route('highlights.update', $highlight->id) : route('highlights.store') }}"
                    method="POST">
                    @csrf
                    @if (isset($highlight))
                        @method('PUT')
                    @endif

                    <div class="mb-3">
                        <label for="title" class="form-label">Judul</label>
                        <input type="text" class="form-control rounded-pill shadow-sm" id="title" name="title"
                            value="{{ old('title', $highlight->title ?? '') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control rounded-3 shadow-sm" id="description" name="description" rows="3" required>{{ old('description', $highlight->description ?? '') }}</textarea>
                    </div>

                    <button type="submit"
                        class="btn btn-success rounded-pill shadow-sm">{{ isset($highlight) ? 'Update' : 'Simpan' }}</button>
                    <a href="{{ route('highlights.index') }}" class="btn btn-secondary rounded-pill shadow-sm">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
