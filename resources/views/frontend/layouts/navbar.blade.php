{{-- Navbar start --}}
<div class="container-fluid shadow mb-3">  {{-- Tambahkan class fixed-top di sini --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="left-navbar">
                <td>
                    @if ($settings)
                        <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="rounded" width="40">
                    @else
                        <p>Logo Dinas</p>
                    @endif
                </td>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="right-navbar">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('agenda') ? 'active' : '' }}"
                                href="{{ route('user.agenda.index') }}">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}"
                                href="{{ route('user.layanan.index') }}">Layanan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  {{ Request::is('berita') ? 'active' : '' }}"" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Posts
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="dropdown-item  {{ Request::is('berita') ? 'active' : '' }}" aria-current="page"
                                        href="{{ route('user.berita.index') }}">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" aria-current="page"
                                        href="">Pengumuman</a>
                                </li>
                                        
                            </ul>
                          </li>
                      
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" aria-current="page"
                                href="#">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
{{-- Navbar end --}}