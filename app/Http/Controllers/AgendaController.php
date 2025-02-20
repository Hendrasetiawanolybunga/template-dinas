<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::all();
        return view('backend.agenda.index', compact('agendas'));
    }

    public function create()
    {
        return view('backend.agenda.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'nullable|string',
        ]);

        Agenda::create([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai ?? 'Sampai selesai', // Default jika tidak diisi
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil ditambahkan');
    }

    public function show(Agenda $agenda)
    {
        return view('backend.agenda.show', compact('agenda'));
    }

    public function edit(Agenda $agenda)
    {
        return view('backend.agenda.edit', compact('agenda'));
    }

    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal' => 'required|date',
            'waktu_mulai' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'nullable|string',
        ]);

        $agenda->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai ?? 'Sampai selesai',
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui');
    }

    public function destroy(Agenda $agenda)
    {
        $agenda->delete();
        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus');
    }



    public function indexFrontend()
    {
        $agendas = Agenda::all(); // Ambil semua data agenda
        return view('frontend.pages.agenda', compact('agendas'));
    }
}
