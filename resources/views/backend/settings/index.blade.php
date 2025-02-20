@extends('backend.layouts.master')
@section('title', 'Settings')
@section('content')
    <div class="row">
        <div class="col--md-12">
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
                                        <td class="text-center">
                                            <a href="{{ route('settings.show', $setting->id) }}" class="btn btn-info btn-sm">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-warning btn-sm">
                                                <i class="ri-file-edit-line"></i>
                                            </a>
                                            <form action="{{ route('settings.destroy', $setting->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="ri-delete-bin-6-line"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
