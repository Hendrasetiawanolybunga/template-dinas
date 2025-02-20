@extends('frontend.layouts.app')
@section('title', 'Detail Layanan')
@section('content')
    <div class="container mt-4">
        <div class="card px-5 shadow">
            <div class="card-header">
                <h2 class="text-center">Detail Layanan Publik</h2>
            </div>
            <div class="card-body">
                <h2 class="text-center mb-3">{{ $layanan->nama_layanan }}</h2>
                <p><strong>Kategori:</strong> {{ $layanan->kategori->nama }}</p>
                <p>{!! $layanan->deskripsi !!}</p>

                <h4>Persyaratan</h4>
                <p>{!! $layanan->persyaratan !!}</p>

                <h4>Prosedur</h4>
                <p>{!! $layanan->prosedur !!}</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('user.layanan.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i></a>
            </div>
        </div>
    </div>
@endsection
