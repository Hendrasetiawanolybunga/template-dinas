@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Home/<span>Layanan Publik</span></h2>
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

    <!-- Layanan Section -->
    <section id="layanan" class="layanan section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Layanan Publik</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="card shadow px-5">
                <div class="card-body">
                    @if ($layanan->count())
                        <div id="layananCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($layanan->chunk(3) as $key => $chunk)
                                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                        <div class="row">
                                            @foreach ($chunk as $item)
                                                <div class="col-md-4">
                                                    <div class="card bg-light">
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $item->nama_layanan }}</h5>
                                                            <p class="card-text">
                                                                {{ Str::limit(strip_tags($item->deskripsi), 100) }}
                                                            </p>
                                                            <a href="{{ route('layanan.detail', $item->id) }}" class="btn btn-primary">
                                                                Detail Layanan
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Tombol Prev & Next -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#layananCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#layananCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <h4 class="text-muted">Belum ada layanan tersedia</h4>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- /Layanan Section -->
@endsection
