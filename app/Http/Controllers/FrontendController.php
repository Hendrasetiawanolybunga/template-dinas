<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Layanan;
use App\Models\Agenda;
use App\Models\Profil;
use App\Models\Post;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function home()
    {
        $banners = Banner::all();
    
        // $layanans = Layanan::all();
        $agendas = Agenda::orderBy('tanggal', 'desc')->get();
        $profil = Profil::first();
        $posts = Post::latest()->take(3)->get(); 
        $settings = Setting::first();     
        return view('frontend.home', compact('banners', 'agendas', 'profil', 'posts','settings'));
    }
    public function index()
    {
        $banners = Banner::all();  
        $profil = Profil::first();
        $settings = Setting::first();     
        $beritaTerbaru = Post::where('category', 'news')->latest()->take(2)->get();
        return view('users.beranda', compact('banners','settings','profil','beritaTerbaru'));
    }

    public function footer(){
        $profil = Profil::first();
        return view('users.layouts.footer', compact('profil'));
    }
    public function visi_misi(){
        $profil = Profil::first();
        return view('users.profil.visi_misi', compact('profil'));
    }
    public function struktur_organisasi(){
        $profil = Profil::first();
        return view('users.profil.struktur_organisasi', compact('profil'));
    }


    public function boot()
{
    View::share('settings', Setting::first());
}

    public function layanan()
{
    $profil = Profil::first();
    $layanan = Layanan::all();
    return view('users.layanan.index', compact('layanan','profil'));
}

public function layananDetail($id)
{

    $layanan = Layanan::findOrFail($id);
    return view('users.layanan.detail', compact('layanan'));
}

public function agenda()
{
    $agenda = Agenda::orderBy('tanggal', 'desc')->get();
    return view('users.agenda.index', compact('agenda'));
}

public function agendaDetail($id)
{
    $agenda = Agenda::findOrFail($id);
    return view('frontend.agenda.detail', compact('agenda'));
}

public function berita()
{
    $berita = Post::where('category', 'News')
        ->orderBy('created_at', 'desc')
        ->get(); // Ambil semua berita tanpa pagination

    return view('users.berita.index', compact('berita'));
}


public function beritaDetail($id)
{
    $berita = Post::findOrFail($id);
    return view('users.berita.news_detail', compact('berita'));
}

}
