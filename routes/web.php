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




Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/dashboard', [AuthController::class, 'index']);
});

// Route untuk admin
Route::prefix('admin')->group(function () {
    Route::resource('banners', BannerController::class);
    Route::resource('posts', PostController::class);
    Route::resource('highlights', HighlightController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('kategori-layanan', KategoriLayananController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('halaman', HalamanStatisController::class);
});



// Route::get('/', function () {
//     return view('frontend.home');
    
// });



Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/layanan', [FrontendController::class, 'layanan'])->name('user.layanan.index');
Route::get('/layanan/{id}', [FrontendController::class, 'layananDetail'])->name('layanan.detail');

Route::get('/agenda', [FrontendController::class, 'agenda'])->name('user.agenda.index');
Route::get('/agenda/{id}', [FrontendController::class, 'agendaDetail'])->name('agenda.detail');

Route::get('/berita', [FrontendController::class, 'berita'])->name('user.berita.index');
Route::get('/berita/{id}', [FrontendController::class, 'beritaDetail'])->name('berita.detail');







