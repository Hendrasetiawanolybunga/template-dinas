<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Banner;
use App\Models\Layanan;
use App\Models\Agenda;
use App\Models\HalamanStatis;
use App\Models\Setting;
use App\Models\User;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        // dd(auth()->user());
        $data = [
            'total_posts' => Post::count(),
            'total_banners' => Banner::count(),
            'total_layanan' => Layanan::count(),
            'total_agenda' => Agenda::count(),
            'total_halaman' => HalamanStatis::count(), 
        ];

        $nama = User::first();
        $icon = Setting::first();
        return view('backend.dashboard.index', compact('data','icon','nama'));
    }
}

