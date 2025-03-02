<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KategoriLayananController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\HalamanStatisController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SyaratLayananController;
use App\Http\Controllers\PendudukLayananController;
use App\Http\Controllers\PengajuanLayananController;


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});

// Route untuk admin
Route::prefix('admin')->group(function () {
    Route::resource('banners', BannerController::class);
    Route::resource('posts', PostController::class);
    Route::resource('highlights', HighlightController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('kategori_layanan', KategoriLayananController::class);
    Route::resource('syarat_layanan', SyaratLayananController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('halaman', HalamanStatisController::class);
    Route::resource('penduduk', PendudukController::class);
    Route::resource('penduduk_layanan', PendudukLayananController::class);

    // Route untuk Update Status Pengajuan Layanan
    Route::put('admin/penduduk_layanan/{id}/update-status', [PendudukLayananController::class, 'updateStatus'])->name('penduduk_layanan.updateStatus');

});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/home/agenda', [FrontendController::class, 'agenda']);
Route::get('/home/berita', [FrontendController::class, 'berita']);
Route::get('/home/visi_misi', [FrontendController::class, 'visi_misi']);
Route::get('/home/struktur_organisasi', [FrontendController::class, 'struktur_organisasi']);

Route::get('/layanan', [FrontendController::class, 'layanan'])->name('user.layanan.index');
Route::get('/layanan/{id}', [FrontendController::class, 'layananDetail'])->name('layanan.detail');

Route::get('/agenda', [FrontendController::class, 'agenda'])->name('user.agenda.index');
Route::get('/agenda/{id}', [FrontendController::class, 'agendaDetail'])->name('agenda.detail');

Route::get('/berita', [FrontendController::class, 'berita'])->name('user.berita.index');
Route::get('berita/{post}', [PostController::class, 'showFrontend'])->name('berita.detail');


Route::get('/pengajuan', [PengajuanLayananController::class, 'create'])->name('pengajuan.create');
Route::post('/pengajuan', [PengajuanLayananController::class, 'store'])->name('pengajuan.store');



// Route::get('/', [FrontendController::class, 'beranda']);
// Route::get('/profil/visi-misi', [FrontendController::class, 'visiMisi']);
// Route::get('/layanan', [FrontendController::class, 'layanan']);
// Route::get('/berita', [FrontendController::class, 'berita']);
// Route::get('/berita/{id}', [FrontendController::class, 'beritaDetail']);
// Route::get('/agenda', [FrontendController::class, 'agenda']);
// Route::get('/agenda/{id}', [FrontendController::class, 'agendaDetail']);






