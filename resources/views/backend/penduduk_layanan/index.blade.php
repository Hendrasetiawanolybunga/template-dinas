@extends('backend.layouts.master')
@section('title', 'Daftar Pengajuan Layanan')

@section('content_header')
    Daftar Pengajuan Layanan
@endsection

@section('content')
    <div class="card shadow p-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Penduduk</th>
                    <th>Layanan</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Tracking Code</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penduduk_layanan as $key => $pl)
                    <tr id="row-{{ $pl->id }}">
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pl->penduduk->nama_penduduk }}</td>
                        <td>{{ $pl->layanan->nama_layanan }}</td>
                        <td>{{ $pl->tanggal_pengajuan }}</td>
                        <td><strong>{{ $pl->tracking_code }}</strong></td>
                        <td id="status-{{ $pl->id }}">
                            <span class="badge 
                                @if ($pl->status == 'Diajukan') bg-warning
                                @elseif ($pl->status == 'Diproses') bg-primary
                                @elseif ($pl->status == 'Selesai') bg-success
                                @endif">
                                {{ $pl->status }}
                            </span>
                        </td>
                        <td>
                            <!-- Tombol Edit Status -->
                            <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalStatus{{ $pl->id }}">
                                Ubah Status
                            </button>

                            <!-- Modal Update Status -->
                            <div class="modal fade" id="modalStatus{{ $pl->id }}" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Status</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form id="updateStatusForm-{{ $pl->id }}">
                                            @csrf
                                            <div class="modal-body">
                                                <label>Status:</label>
                                                <select name="status" class="form-control">
                                                    <option value="Diajukan" {{ $pl->status == 'Diajukan' ? 'selected' : '' }}>Diajukan</option>
                                                    <option value="Diproses" {{ $pl->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                                    <option value="Selesai" {{ $pl->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary update-status" data-id="{{ $pl->id }}">Simpan</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('.update-status').click(function() {
            let id = $(this).data('id');
            let form = $('#updateStatusForm-' + id);
            let status = form.find('select[name="status"]').val();

            $.ajax({
                url: "{{ url('admin/penduduk_layanan') }}/" + id + "/update-status",
                type: "PUT",
                data: {
                    _token: "{{ csrf_token() }}",
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        $('#modalStatus' + id).modal('hide');

                        // Update tampilan status
                        let badgeClass = response.status === 'Diajukan' ? 'bg-warning' :
                                         response.status === 'Diproses' ? 'bg-primary' :
                                         'bg-success';

                        $('#status-' + id).html(`
                            <span class="badge ${badgeClass}">${response.status}</span>
                        `);

                        // SweetAlert sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Status berhasil diperbarui!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                },
                error: function(response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal!',
                        text: 'Terjadi kesalahan, coba lagi!',
                    });
                }
            });
        });
    });
</script>
@endsection
