@extends('backend.layouts.master')
@section('title', 'Edit Layanan')
@section('content_header')
    Layanan/Edit Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
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
                                
                                <div class="mb-3">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea class="form-control " name="deskripsi" id="deskripsi">  {{ $layanan->deskripsi }}</textarea>
                                </div>

                            </div>
                        </div>

                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{ route('layanan.index') }}" class="btn btn-danger"><i class="ri-corner-up-left-double-line"></i> Batal</a>
                        </div>
                    </div>

                    <!-- Bagian Editor -->
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">                                                                                        
                                <div class="mb-3">
                                    <label class="form-label">Persyaratan</label>
                                    <textarea class="form-control " name="persyaratan" id="persyaratan">  {{ $layanan->persyaratan }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Prosedur</label>
                                    <textarea class="form-control " name="prosedur" id="prosedur">  {{ $layanan->prosedur }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.2.0/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea#deskripsi'
        });
        tinymce.init({
            selector: 'textarea#persyaratan'
        });
        tinymce.init({
            selector: 'textarea#prosedur'
        });
    </script>
@endsection