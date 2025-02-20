
    <header class="bg-light text-center py-2">
        @if ($profil)
            <h1>{{ $profil->nama_dinas }}</h1>
            <p>Informasi dan layanan untuk masyarakat</p>
        @else
            <h1>Nama Dinas</h1>
            <p>Informasi dan layanan untuk masyarakat</p>
        @endif
    </header>

