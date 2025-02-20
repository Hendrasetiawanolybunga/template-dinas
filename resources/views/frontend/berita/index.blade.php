@extends('frontend.layouts.app')

@section('title', 'Berita & Pengumuman')

@section('content')
    <div class="container mt-4">
        <div class="card shadow px-5">
            <div class="card-header">
                <h2 class="text-center">Berita & Pengumuman</h2>
            </div>
            <div class="card-body">
                @if ($berita->count())
                    <div id="beritaCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($berita->chunk(3) as $key => $chunk)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($chunk as $item)
                                            <div class="col-md-4">
                                                <div class="card bg-light">
                                                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                                        alt="Gambar Berita" loading="lazy">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item->title }}</h5>
                                                        <p class="card-text">
                                                            {{ Str::limit(strip_tags($item->content), 100) }}</p>
                                                        <a href="{{ route('berita.detail', $item->id) }}"
                                                            class="btn btn-primary">Baca Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Tombol Prev & Next -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <div class="text-center py-5">
                        <h4 class="text-muted">Belum ada berita tersedia</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
