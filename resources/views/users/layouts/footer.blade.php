<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row align-items-center">
            <!-- Informasi Kontak (Kiri) -->
            <div class="col-md-4 text-start">
                <div class="contact-info mb-3">
                    @if ($profil)
                        <p><i class="bi bi-geo-alt-fill"></i> {{ $profil->alamat }}</p>
                        <p><i class="bi bi-telephone-fill"></i> {{ $profil->telepon }}</p>
                        <p><i class="bi bi-envelope-fill"></i> {{ $profil->email }}</p>
                    @else
                        <p class="text-white">Informasi belum tersedia</p>
                    @endif
                </div>
            </div>

            <!-- Logo (Kanan) -->
            <div class="col-md-8 text-end">
                @if(isset($settings) && $settings->logo)
                    <img src="{{ asset('storage/' . $settings->logo)}}" alt="Logo" class="img-fluid" style="max-height: 150px;"
                    style="filter: drop-shadow(0px 0px 5px rgba(255, 255, 255, 0.5));">
                @else
                    <p class="text-white">Logo belum tersedia</p>
                @endif
            </div>
        </div>

        <!-- Sosial Media (Tengah) -->
        <div class="row justify-content-center my-3">
            <div class="col text-center">
                @if ($profil && $profil->facebook)
                    <a href="{{ $profil->facebook }}" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
                @endif
                @if ($profil && $profil->twitter)
                    <a href="{{ $profil->twitter }}" class="text-white mx-2"><i class="bi bi-twitter-x"></i></a>
                @endif
                @if ($profil && $profil->instagram)
                    <a href="{{ $profil->instagram }}" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
                @endif
                @if ($profil && $profil->youtube)
                    <a href="{{ $profil->youtube }}" class="text-white mx-2"><i class="bi bi-youtube"></i></a>
                @endif
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="row">
            <div class="col text-center">
                <span>&copy; 2025</span> 
                <strong class="px-1 sitename">
                    {{ $profil ? $profil->nama_dinas : 'Nama Dinas' }}
                </strong>
                <span>All Rights Reserved</span>
            </div>
        </div>
    </div>
</footer>
