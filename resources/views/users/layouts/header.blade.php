<div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="" class="logo d-flex align-items-center">
        @if ($settings)
            <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo"
                style="width: 50px; height: 50px; object-fit: contain;  filter: drop-shadow(0px 0px 5px rgba(255, 255, 255, 0.5)); border-radius: 5px;">
        @else
            <p>Logo Dinas</p>
        @endif
    </a>

    <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{ url('/home') }}" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="{{ route('user.agenda.index') }}">Agenda</a></li>
            <li><a href="{{ route('user.berita.index') }}">Berita</a></li>
            <li class="dropdown"><a href="#"><span>Profil</span> <i
                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="{{ url('/home/visi_misi') }}">Visi-Misi</a></li>
                    <li><a href="{{ url('/home/struktur_organisasi') }}">Struktur Organisasi</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Layanan</span> <i
                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                    <li><a href="{{ route('user.layanan.index') }}">Layanan Publik</a></li>
                    <li><a href="{{ route('pengajuan.create') }}">Pengajuan Layanan</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>
</div>
