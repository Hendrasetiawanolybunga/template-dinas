@extends('frontend.layouts.app')
@section('title', 'Agenda Kegiatan')
@section('content')

    @if ($agenda)
        <div class="container mt-4">
            <div class="card px-5 shadow">
                <div class="card-header">
                    <h2 class="text-center">Agenda Kegiatan</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($agenda as $item)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                        <p class="card-text">{!! Str::limit($item->deskripsi, 50) !!}</p>
                                        <a href="{{ route('agenda.detail', $item->id) }}" class="btn btn-secondary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-5">
            <h4 class="text-muted">Belum ada agenda kegiatan</h4>
        </div>
    @endif

@endsection
