@extends('backend.layouts.master')
@section('title', 'Edit Pengajuan Layanan')

@section('content_header')
    Edit Pengajuan Layanan
@endsection

@section('content')
    <div class="card shadow p-4">
        <form id="editForm">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $pendudukLayanan->id }}">

            <div class="mb-3">
                <label>Penduduk</label>
                <select name="penduduk_id" class="form-control">
                    @foreach ($penduduk as $p)
                        <option value="{{ $p->id }}" {{ $p->id == $pendudukLayanan->penduduk_id ? 'selected' : '' }}>
                            {{ $p->nama_penduduk }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Layanan</label>
                <select name="layanan_id" class="form-control">
                    @foreach ($layanan as $l)
                        <option value="{{ $l->id }}" {{ $l->id == $pendudukLayanan->layanan_id ? 'selected' : '' }}>
                            {{ $l->nama_layanan }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Tanggal Pengajuan</label>
                <input type="date" name="tanggal_pengajuan" class="form-control" value="{{ $pendudukLayanan->tanggal_pengajuan }}">
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
    $('#editForm').submit(function(e) {
        e.preventDefault();
        let id = $('input[name="id"]').val();
        let formData = $(this).serialize();
        
        $.ajax({
            url: "{{ url('admin/penduduk_layanan') }}/" + id,
            type: "PUT",
            data: formData,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: 'Pengajuan layanan berhasil diperbarui!',
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
