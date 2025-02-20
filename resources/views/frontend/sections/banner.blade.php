{{-- <div class="border rounded p-3">
    @if ($banners->count() > 0)
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100 rounded" alt="{{ $banner->title }}" style="height: 200px;">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-shadow">{{ $banner->title }}</h5>
                            <p class="text-shadow">{{ $banner->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    @else
        <div class="text-center py-5">
            <h4 class="text-muted">Banner belum tersedia</h4>
        </div>
    @endif
</div> --}}


<div class="border rounded p-3">
    @if ($banners->count() > 0)
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/' . $banner->image) }}" class="d-block w-100 rounded" alt="{{ $banner->title }}" style="height: 200px;">
                        
                        <!-- Overlay -->
                        <div class="overlay position-absolute top-0 w-100 h-100 bg-dark opacity-50"></div>

                        <!-- Teks Banner -->
                        <div class="banner-text position-absolute w-100 text-center text-white px-3">
                            <h5 class="fw-bold text-shadow">{{ $banner->title }}</h5>
                            <p class="text-shadow">{{ $banner->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    @else
        <div class="text-center py-5">
            <h4 class="text-muted">Banner belum tersedia</h4>
        </div>
    @endif
</div>

<style>
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Warna gelap dengan transparansi */
        border-radius: 5px;
    }

    .banner-text {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
