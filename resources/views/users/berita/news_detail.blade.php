@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Home / <span>Berita</span></h2>
                </div>
            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
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

    <!-- Detail Berita -->
    <section id="news-detail" class="news-detail section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Detail Berita</h2>
        </div>

        <div class="container">
            <div class="card shadow p-4">
                <div class="card-body">
                    <h2 class="mb-3">{{ $post->title }}</h2>
                    <p class="text-muted">Diposting pada {{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F Y') }}</p>

                    <div class="text-center my-4">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded" alt="Gambar Berita">
                    </div>

                    <div class="news-content">
                        {!! $post->content !!}
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('user.berita.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Kembali ke Berita
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Detail Berita -->

@endsection
