<section class="mt-5">
    <h2 class="text-center">Struktur Organisasi</h2>
    <div class="text-center">
        @if ($profil && $profil->struktur_organisasi)
            <img src="{{ asset('storage/' . $profil->struktur_organisasi) }}" class="img-fluid border rounded" alt="Struktur Organisasi">
        @else
            <div class="text-center border p-3">
                <p class="text-muted">Struktur organisasi belum tersedia.</p>
            </div>
        @endif
    </div>
</section>
