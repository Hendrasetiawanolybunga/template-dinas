@extends('frontend.layouts.app')
@section('title', 'Layanan Publik')
@section('content')

    @if ($layanan)
        <div class="container mt-4">
            <div class="card px-5 shadow">
                <div class="card-header">
                    <h2 class="text-center">Layanan Publik</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($layanan as $item)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nama_layanan }}</h5>
                                        <p class="card-text">{!! Str::limit($item->deskripsi, 100) !!}</p>
                                        <a href="{{ route('layanan.detail', $item->id) }}"
                                            class="btn btn-primary">Detail</a>
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
            <h4 class="text-muted">Layanan belum tersedia</h4>
        </div>
    @endif
@endsection
