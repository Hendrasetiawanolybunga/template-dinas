@extends('backend.layouts.master')
@section('title', 'Detail Agenda')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <p><strong>Judul <br></strong>{{ $agenda->judul }}</p>
                            <p><strong>Tanggal <br> </strong> {{ $agenda->tanggal }}</p>
                            <p><strong>Waktu <br></strong> {{ $agenda->waktu_mulai }} - {{ $agenda->waktu_selesai }}</p>
                            <p><strong>Lokasi <br></strong> {{ $agenda->lokasi }}</p>
                        </div>
                        <div class="col-lg-6 border rounded">
                            <p><strong>Deskripsi
                                    <hr class="m-0">
                                </strong> {!! nl2br(e($agenda->deskripsi)) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('agenda.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>

@endsection
