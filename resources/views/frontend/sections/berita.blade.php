<section class="mt-5 justify-content-center">
    <h2 class="text-center mb-5">Berita & Pengumuman</h2>
    <div class="row">
        @if ($posts->count() > 0)
            @foreach ($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3 shadow" style="height: 250px;">
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             class="card-img-top w-100" 
                             alt="{{ $post->title }}" 
                             style="height: 120px; object-fit: contain;">
                        
                        <div class="card-body" style="height: 80px; overflow: hidden;">
                            <h6 class="card-title text-truncate" title="{{ $post->title }}">{{ $post->title }}</h6>                                                   
                        </div>
                        
                        <div class="card-footer text-center" style="height: 50px;">
                            <a href="{{ route('user.berita.index', $post->id) }}" class="link">Baca Selengkapnya</a>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        @else
            <div class="col-12">
                <div class="text-center border p-3">
                    <p class="text-muted">Belum ada berita terbaru.</p>
                </div>
            </div>
        @endif
    </div>
</section>
