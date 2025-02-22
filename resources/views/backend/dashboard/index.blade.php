@extends('backend.layouts.master')
@section('favicon')
    @if ($icon && $icon->favicon)
        <link rel="shortcut icon" href="{{ asset('storage/' . $icon->favicon) }}">
    @else
        <p>logo</p>
    @endif

@endsection
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="card rounded shadow mb-3 p-4">
            <div class="row">
                <div class="col d-flex-box align-items-center">
                    <h3 class="card-title text-info">Selamat Datang {{ $nama->name }}</h3>

                    <p>Terimah Kasih sudah Login ✨</p>
                </div>
                <div class="col-md-3 text-center">
                    @if ($icon && $icon->favicon)
                        <img src="{{ asset('storage/' . $settings->logo) }}" alt="Logo" class="rounded" width="80">
                    @else
                        <h2>Logo Dinas</h2>
                    @endif

                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{ $data['total_posts'] }}</h4>
                        <p>Jumlah Postingan</p>
                    </div>
                    <i class="fas fa-file-alt fa-3x"></i> <!-- Ikon Postingan -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-success text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{ $data['total_banners'] }}</h4>
                        <p>Jumlah Banner Aktif</p>
                    </div>
                    <i class="fas fa-image fa-3x"></i> <!-- Ikon Banner -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-warning text-dark">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{ $data['total_layanan'] }}</h4>
                        <p>Jumlah Layanan Publik</p>
                    </div>
                    <i class="fas fa-concierge-bell fa-3x"></i> <!-- Ikon Layanan -->
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-info text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{ $data['total_agenda'] }}</h4>
                        <p>Jumlah Agenda Kegiatan</p>
                    </div>
                    <i class="fas fa-calendar-alt fa-3x"></i> <!-- Ikon Agenda -->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-danger text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4>{{ $data['total_halaman'] }}</h4>
                        <p>Jumlah Halaman Statis</p>
                    </div>
                    <i class="fas fa-file fa-3x"></i> <!-- Ikon Halaman Statis -->
                </div>
            </div>
        </div>
    </div>
@endsection
