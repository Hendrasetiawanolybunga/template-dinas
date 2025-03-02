@extends('users.layouts.master')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container mt-5">
                    <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di Web <span>KOMINFO</span></h2>
                    <p class="animate__animated animate__fadeInUp">"Selamat datang di situs resmi Kementerian Komunikasi dan
                        Informatika Republik Indonesia. Kami hadir untuk memberikan informasi dan layanan terbaik bagi
                        masyarakat."</p>
                </div>
            </div>
            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

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
            <h2>Sambutan Kepala Dinas</h2>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Kementerian Komunikasi dan Informatika Republik Indonesia (Kominfo) adalah lembaga pemerintah yang
                        bertanggung jawab atas perumusan dan pelaksanaan kebijakan di bidang komunikasi dan informatika.
                        Kami berupaya untuk mewujudkan masyarakat informasi Indonesia yang cerdas, dan kreatif.
                    </p>

                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                </div>

            </div>

        </div>

    </section>
    <!-- /About Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <!-- Bagian Kiri (Tentang Kominfo) -->
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Kementerian Komunikasi dan Informatika Republik Indonesia (Kominfo) adalah lembaga pemerintah yang
                        bertanggung jawab atas perumusan dan pelaksanaan kebijakan di bidang komunikasi dan informatika.
                        Kami berupaya untuk mewujudkan masyarakat informasi Indonesia yang cerdas, dan kreatif.
                    </p>
                </div>

                <!-- Bagian Kanan (Berita Terbaru) -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="mb-3">Berita Terbaru</h4>

                    <div class="row">
                        @foreach ($beritaTerbaru as $berita)
                            <div class="col-12 mb-3">
                                <div class="card border-0 shadow-sm" style="background-color: #f8f9fa;">
                                    <div class="row g-0">
                                        <!-- Gambar Berita -->
                                        <div class="col-md-4">
                                            <img src="{{ asset('storage/' . $berita->image) }}"
                                                class="img-fluid rounded-start" alt="{{ $berita->title }}">
                                        </div>

                                        <!-- Konten Berita -->
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">{{ Str::limit($berita->title, 50) }}
                                                </h5>
                                                <p class="card-text text-muted small">
                                                    {{ $berita->created_at->format('d M Y') }}</p>
                                                <p class="card-text">{!! Str::limit($berita->content, 80) !!}</p>
                                                <a href="{{ route('berita.detail', $berita->id) }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    Baca Selengkapnya
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div> <!-- End Col -->
            </div> <!-- End Row -->
        </div> <!-- End Container -->
    </section>


    <!-- /About Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade" data-aos-delay="100">

            <div class="row gy-4">
                @if ($profil)
                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $profil->alamat }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>{{ $profil->telepon }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>{{ $profil->email }}</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                @else
                @endif


                <div class="col-lg-8">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
