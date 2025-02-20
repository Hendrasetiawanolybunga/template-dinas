@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="container">
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
</div>
@endsection
