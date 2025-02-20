@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card shadow-lg">
        <div class="card-body text-center">
            <h2>{{ $banner->title }}</h2>
            <div class="text-center">
                <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image" 
                     class="img-fluid w-100 rounded shadow-sm mb-3" 
                     style="max-height: 400px; object-fit: contain;">
            </div>
            <h4 class="text-center">Deskripsi</h4>
            <p class="text-justify" style="text-align: justify;">{{ $banner->description }}</p>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('banners.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
