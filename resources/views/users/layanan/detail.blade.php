@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Home/Layanan Publik/<span>{{ $layanan->nama_layanan }}</span></h2>
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

    <!-- Detail Layanan Section -->
    <section id="detail-layanan" class="detail-layanan section">
        <div class="container section-title" data-aos="fade-up">
            <h2>{{ $layanan->nama_layanan }}</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="card shadow px-5">
                <div class="card-body">
                    <p><strong>Deskripsi:</strong></p>
                    <p>{{ $layanan->deskripsi }}</p>

                    <p><strong>Syarat Layanan:</strong></p>
                    <ul>
                        @foreach ($layanan->syarat as $syarat)
                            <li>{{ $syarat->syarat }}</li>
                        @endforeach
                    </ul>

                    <p><strong>Prosedur:</strong></p>
                    <p>{{ $layanan->prosedur }}</p>

                    <a href="{{ route('user.layanan.index') }}" class="btn btn-secondary">Kembali</a>
                    <a href="{{ route('pengajuan.create', $layanan->id) }}" class="btn btn-primary">Ajukan Layanan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Detail Layanan Section -->
@endsection
