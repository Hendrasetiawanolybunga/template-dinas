@extends('layouts.admin')

@section('content')
<div class="container">
    <h3>Detail Pengaturan</h3>
    <table class="table table-bordered">
        <tr>
            <th>Nama Aplikasi</th>
            <td>{{ $setting->app_name }}</td>
        </tr>
        <tr>
            <th>Logo</th>
            <td>
                @if($setting->logo)
                    <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo" class="img-thumbnail" width="100">
                @else
                    Tidak ada logo
                @endif
            </td>
        </tr>
        <tr>
            <th>Favicon</th>
            <td>
                @if($setting->favicon)
                    <img src="{{ asset('storage/' . $setting->favicon) }}" alt="Favicon" class="img-thumbnail" width="50">
                @else
                    Tidak ada favicon
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('settings.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
