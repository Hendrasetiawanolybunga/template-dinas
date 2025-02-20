@extends('frontend.layouts.app')
@section('title', 'Detail Agenda')
@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header">
                <h2 class="text-center">{{ $agenda->judul }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-muted "><strong>Tanggal :
                            </strong><br>{{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d F Y') }}</p>
                        <p class="text-muted "><strong>Waktu : </strong><br>{{ $agenda->waktu_mulai }} s/d
                            {{ $agenda->waktu_selesai }}</p>
                        <p class="text-muted "><strong>Lokasi : </strong><br>{{ $agenda->lokasi }}</p>
                    </div>
                    <div class="col-md text-wrap">
                        <p class="text-justify"><strong>Deskripsi : </strong><br>{{ $agenda->deskripsi }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center mt-3">
                <a href="{{ route('user.agenda.index') }}" class="btn btn-secondary"><i
                        class="bi bi-arrow-left-circle"></i></a>
            </div>
        </div>
    </div>

@endsection
