@extends('backend.layouts.master')
@section('title', 'Tambah Pengajuan Layanan')

@section('content_header')
    Tambah Pengajuan Layanan
@endsection

@section('content')
    <div class="card shadow p-4">
        <form id="createForm">
            @csrf
            <div class="mb-3">
                <label>Penduduk</label>
                <select name="penduduk_id" class="form-control">
                    @foreach ($penduduk as $p)
                        <option value="{{ $p->id }}">{{ $p->nama_penduduk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Layanan</label>
                <select name="layanan_id" class="form-control">
                    @foreach ($layanan as $l)
                        <option value="{{ $l->id }}">{{ $l->nama_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Pengajuan</label>
                <input type="date" name="tanggal_pengajuan" class="form-control">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('#createForm').submit(function(e) {
        e.preventDefault();
        let formData = $(this).serialize();
        
        $.ajax({
            url: "{{ route('penduduk_layanan.store') }}",
            type: "POST",
            data: formData,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Pengajuan layanan berhasil ditambahkan!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = "{{ route('penduduk_layanan.index') }}";
                    });
                }
            },
            error: function(response) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan, coba lagi!',
                });
            }
        });
    });
</script>
@endsection
