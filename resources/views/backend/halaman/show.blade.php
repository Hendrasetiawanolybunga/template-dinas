@extends('backend.layouts.master')
@section('title', 'Detail Halaman Statis')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <h3>{{ $halaman->judul }}</h3>
                    <p><strong>Slug:</strong> {{ $halaman->slug }}</p>
                    <p><strong>Konten:</strong></p>
                    <p>{!! nl2br(e($halaman->konten)) !!}</p>
                    <a href="{{ route('halaman.index') }}" class="btn btn-secondary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
@endsection
