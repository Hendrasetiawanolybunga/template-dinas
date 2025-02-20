@extends('backend.layouts.master')
@section('title', 'Detail Layanan')
@section('content_header')
    Layanan/Detail Layanan
@endsection
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Card untuk Detail Layanan -->
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <table class="table ">
                                <tr>
                                    <th width="30%"><i class="fas fa-folder"></i> Kategori</th>
                                    <td>{{ $layanan->kategori->nama }}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-tag"></i> Nama Layanan</th>
                                    <td>{{ $layanan->nama }}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-file-alt"></i> Deskripsi</th>
                                    <td>{!! $layanan->deskripsi !!}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-list"></i> Persyaratan</th>
                                    <td>{!! $layanan->persyaratan !!}</td>
                                </tr>
                                <tr>
                                    <th><i class="fas fa-tasks"></i> Prosedur</th>
                                    <td>{!! $layanan->prosedur !!}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ route('layanan.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
