<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

      <!-- Brand Logo Light -->
      <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user p-3 text-white">
            <a href="pages-profile.html" class="d-flex align-items-center text-reset">
                <div class="flex-shrink-0">
                    <img src="{{ asset('assets/images/users/avatar-2.jpg' ) }}" alt="user-image" height="42" class="rounded-circle shadow">
                </div>
                <div class="flex-grow-1 ms-2">
                    <span class="fw-semibold fs-15 d-block">Doris Larson</span>
                    <span class="fs-13">Founder</span>
                </div>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title mt-1"> Main</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-2-fill"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="ri-service-line"></i>
                    <span> Layanan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('penduduk.index') }}"><i class="ri-arrow-right-double-fill"></i> Data Penduduk</a>
                        </li>
                        <li>
                            <a href="{{ route('kategori_layanan.index') }}"><i class="ri-arrow-right-double-fill"></i> Kategori Layanan</a>
                        </li>
                        <li>
                            <a href="{{ route('layanan.index') }}"><i class="ri-arrow-right-double-fill"></i> Layanan</a>
                        </li>
                        <li>
                            <a href="{{ route('syarat_layanan.index') }}"><i class="ri-arrow-right-double-fill"></i> Syarat Layanan</a>
                        </li>
                        <li>
                            <a href="{{ route('penduduk_layanan.index') }}"><i class="ri-arrow-right-double-fill"></i> Penduduk Layanan</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="ri-newspaper-line"></i>
                    <span> Postingan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('posts.index') }}"><i class="ri-arrow-right-double-fill"></i> Post</a>
                        </li>
                        <li>
                            <a href="{{ route('banners.index') }}"><i class="ri-arrow-right-double-fill"></i> Banner</a>
                        </li>
                        <li>
                            <a href="{{ route('highlights.index') }}"><i class="ri-arrow-right-double-fill"></i> Highlight</a>
                        </li>
                    </ul>
                </div>
            </li>
      
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-profile-line"></i>
                    <span> Profil </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('profil.index') }}"><i class="ri-arrow-right-double-fill"></i> Profil Dinas</a>
                        </li>
                        <li>
                            <a href="{{ route('halaman.index') }}"><i class="ri-arrow-right-double-fill"></i> Halaman Statis </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError" class="side-nav-link">
                    <i class="ri-settings-line"></i>
                    <span> Pengaturan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesError">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('settings.index') }}"><i class="ri-arrow-right-double-fill"></i> Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('agenda.index') }}"><i class="ri-arrow-right-double-fill"></i> Agenda</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->