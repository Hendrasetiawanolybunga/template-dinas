
    <footer class="bg-secondary text-center text-white text-lg-start mt-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-md-start text-center">
                    <h5 class="fw-bold">Kontak Kami</h5>
                    @if ($profil)
                        <p><i class="fas fa-map-marker-alt"></i> {{ $profil->alamat }}</p>
                        <p><i class="fas fa-phone"></i> {{ $profil->telepon }}</p>
                        <p><i class="fas fa-envelope"></i> {{ $profil->email }}</p>
                    @else
                        <p class="text-muted">Informasi belum tersedia</p>
                    @endif
                </div>
                {{-- <div class="col-md-4 text-center">
                    <h5 class="fw-bold">Ikuti Kami</h5>
                    <a href="#" class="me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
                </div> --}}
                <div class="col-md-6 text-md-end text-center">
                    @if ($profil)
                        <p class="mb-0">© 2025 {{ $profil->nama_dinas }}. All rights reserved.</p>
                    @else
                        <p class="mb-0">© 2025 Nama Dinas. All rights reserved.</p>
                    @endif
                </div>
            </div>
        </div>
    </footer>

