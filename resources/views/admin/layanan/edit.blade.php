@extends('layouts.admin')
@section('content_header')
    <span>Edit Layanan</span>
@endsection
@section('content')
    <div class="container">
        <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select name="kategori_id" class="form-control">
                                    @foreach ($kategori as $item)
                                        <option value="{{ $item->id }}"
                                            {{ $item->id == $layanan->kategori_id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Layanan</label>
                                <input type="text" name="nama" class="form-control" value="{{ $layanan->nama }}"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>

                        </div>
                    </div>
                </div>

                <!-- Bagian Editor -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Detail Layanan</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <div id="editor-deskripsi"></div>
                                <input type="hidden" name="deskripsi" id="input-deskripsi"
                                    value="{{ $layanan->deskripsi }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Persyaratan</label>
                                <div id="editor-persyaratan"></div>
                                <input type="hidden" name="persyaratan" id="input-persyaratan"
                                    value="{{ $layanan->persyaratan }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Prosedur</label>
                                <div id="editor-prosedur"></div>
                                <input type="hidden" name="prosedur" id="input-prosedur" value="{{ $layanan->prosedur }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
