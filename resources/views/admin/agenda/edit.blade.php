@extends('layouts.admin')
@section('title', 'Edit Agenda')
@section('content_header')
    <span>Edit Agenda</span>
@endsection
@section('content')
    <div class="card shadow-lg rounded-3 mx-auto" style="max-width: 100%;">
        <div class="card-body">

            <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ $agenda->judul }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $agenda->tanggal }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Waktu Mulai</label>
                    <input type="time" name="waktu_mulai" class="form-control" value="{{ $agenda->waktu_mulai }}"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Waktu Selesai (Opsional)</label>
                    <input type="time" name="waktu_selesai" class="form-control" value="{{ $agenda->waktu_selesai }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Lokasi</label>
                    <input type="text" name="lokasi" class="form-control" value="{{ $agenda->lokasi }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="3">{{ $agenda->deskripsi }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('agenda.index') }}" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
@endsection
