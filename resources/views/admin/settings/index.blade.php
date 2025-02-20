@extends('layouts.admin')
@section('title', 'Settings')
@section('content_header')
    <span>Daftar Settings</span>
@endsection
@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">
            <a href="{{ route('settings.create') }}" class="btn btn-primary mb-3">Tambah Pengaturan</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="table-responsive">

                <table class="table table-striped table-hover rounded-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Aplikasi</th>
                            <th>Logo</th>
                            <th>Favicon</th>
                            <th width="200" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($settings as $key => $setting)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $setting->app_name }}</td>
                                <td>
                                    @if ($setting->logo)
                                        <img src="{{ asset('storage/' . $setting->logo) }}" alt="Logo"
                                            class="img-thumbnail" width="30">
                                    @endif
                                </td>
                                <td>
                                    @if ($setting->favicon)
                                        <img src="{{ asset('storage/' . $setting->favicon) }}" alt="Favicon"
                                            class="img-thumbnail" width="30">
                                    @endif
                                </td>
                                <td class="d-flex justify-content-center  align-items-center">
                                    <a href="{{ route('settings.show', $setting->id) }}" class="btn btn-info btn-sm"><i
                                            class="fas fa-eye"></i></a>
                                    <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning btn-sm mx-2"><i
                                            class="fas fa-edit"></i></a>
                                    <form action="{{ route('settings.destroy', $setting->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus?')"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
