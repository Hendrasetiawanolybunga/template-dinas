@extends('backend.layouts.master')
@section('title', 'Detail Profil')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <!-- Informasi Profil -->
                        <div class="col-md-6">
                            <h5>{{ $profil->nama_dinas }}</h5>
                            <p><strong>Alamat:</strong> {{ $profil->alamat }}</p>
                            <p><strong>Telepon:</strong> {{ $profil->telepon }}</p>
                            <p><strong>Email:</strong> {{ $profil->email }}</p>
                            <p><strong>Visi:</strong></p>
                            <div class="border p-2 bg-light">{!! $profil->visi !!}</div>
                            <p><strong>Misi:</strong></p>
                            <div class="border p-2 bg-light">{!! $profil->misi !!}</div>
                        </div>

                        <!-- Struktur Organisasi -->
                        <div class="col-md-6 text-center">
                            <h5>Struktur Organisasi</h5>
                            <div class="border p-2">
                                <img src="{{ asset('storage/' . $profil->struktur_organisasi) }}" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('profil.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
