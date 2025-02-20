<section class="mt-5">
    <h2 class="text-center">Visi Misi</h2>
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
</section>
