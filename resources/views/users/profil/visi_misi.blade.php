@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Home/<span>Visi-Misi</span></h2>
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

    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Visi-Misi</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="card shadow px-5">
                <div class="card-body">
                    <div class="rounded p-3">
                        @if ($profil)
                            <div class="row">
                                <div class="col-md-5">
                                    <p><strong>Visi:</strong> {!! $profil->visi !!}</p>
                                </div>

                                <div class="col-md-7">
                                    <p><strong>Misi:</strong></p>
                                    <ul>
                                        @foreach (explode("\n", $profil->misi) as $misi)
                                            <li>{!! $misi !!}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="text-center border p-3">
                                <p class="text-muted">Visi-Misi Belum tersedia.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

@endsection
