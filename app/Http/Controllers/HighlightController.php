<?php
namespace App\Http\Controllers;

use App\Models\Highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    public function index()
    {
        $highlights = Highlight::latest()->get();
        return view('backend.highlights.index', compact('highlights'));
    }

    public function create()
    {
        return view('backend.highlights.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Highlight::create($request->all());

        return redirect()->route('highlights.index')->with('success', 'Highlight berhasil ditambahkan.');
    }

    public function show(Highlight $highlight)
    {
        return view('backend.highlights.show', compact('highlight'));
    }

    public function edit(Highlight $highlight)
    {
        return view('backend.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, Highlight $highlight)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $highlight->update($request->all());

        return redirect()->route('highlights.index')->with('success', 'Highlight berhasil diperbarui.');
    }

    public function destroy(Highlight $highlight)
    {
        $highlight->delete();
        return redirect()->route('highlights.index')->with('success', 'Highlight berhasil dihapus.');
    }

}
