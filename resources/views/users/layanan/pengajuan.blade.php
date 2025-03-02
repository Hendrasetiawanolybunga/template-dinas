@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Home/Layanan Publik/<span>Pengajuan</span></h2>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>
    </section>
    <!-- /Hero Section -->

    <!-- Form Pengajuan Section -->
    <section id="pengajuan-layanan" class="pengajuan-layanan section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Form Pengajuan Layanan</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="card shadow px-5">
                <div class="card-body">
                    <form id="pengajuanForm">
                        @csrf
                        <input type="hidden" name="layanan_id" value="{{ $layanan->id ?? '' }}">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No. HP</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>

                        <div class="mb-3">
                            <label for="dokumen" class="form-label">Unggah Dokumen Pendukung</label>
                            <input type="file" class="form-control" id="dokumen" name="dokumen">
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                        <a href="{{ route('user.layanan.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Form Pengajuan Section -->
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#pengajuanForm').submit(function (e) {
            e.preventDefault();
            
            let formData = new FormData(this);

            $.ajax({
                url: "{{ route('pengajuan.store') }}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    Swal.fire({
                        title: 'Mengirim...',
                        text: 'Mohon tunggu sebentar.',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                },
                success: function (response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: response.message,
                    }).then(() => {
                        window.location.href = "{{ route('layanan.index') }}";
                    });
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = 'Terjadi kesalahan.';

                    if (errors) {
                        errorMessage = Object.values(errors).map(err => err[0]).join('<br>');
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        html: errorMessage,
                    });
                }
            });
        });
    });
</script>
@endpush
