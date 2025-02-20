@extends('backend.layouts.master')
@section('title', 'Agenda')
@section('content')
    <div class="row">
        <div class="col--md-12">
            <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
                <div class="card-body">
                    <a href="{{ route('agenda.create') }}" class="btn btn-primary mb-3 btn-sm"> <i class="fas fa-plus"></i>
                        Tambah Agenda</a>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Lokasi</th>
                                <th class="text-center" width="200">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($agendas as $agenda)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $agenda->judul }}</td>
                                    <td>{{ $agenda->tanggal }}</td>
                                    <td>{{ $agenda->waktu_mulai }}</td>
                                    <td>{{ $agenda->waktu_selesai }}</td>
                                    <td>{{ $agenda->lokasi }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-info btn-sm">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('agenda.edit', $agenda->id) }}" class="btn btn-warning btn-sm">
                                            <i class="ri-file-edit-line"></i>
                                        </a>
                                        <form action="{{ route('agenda.destroy', $agenda->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus agenda ini?')">
                                                <i class="ri-delete-bin-6-line"></i>
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
@endsection
