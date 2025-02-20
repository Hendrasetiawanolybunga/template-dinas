@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
<div class="container mt-4">
    
    {{-- Banner --}}
    @include('frontend.sections.banner')

    {{-- Profil Dinas --}}
    @include('frontend.sections.profil')

    {{-- Struktur Organisasi --}}
    @include('frontend.sections.struktur')

    {{-- Berita & Pengumuman --}}
    @include('frontend.sections.berita')

</div>
@endsection
