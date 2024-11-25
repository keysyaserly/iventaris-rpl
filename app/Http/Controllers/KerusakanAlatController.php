<?php
namespace App\Http\Controllers;

use App\Models\KerusakanAlat;
use Illuminate\Http\Request;

class KerusakanAlatController extends Controller
{
    // Display a listing of the resources
    public function index()
    {
        $kerusakanAlat = KerusakanAlat::all();
        return view('kerusakanAlat.index', compact('kerusakanAlat'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('kerusakanAlat.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
        ]);

        KerusakanAlat::create($request->all());
        return redirect()->route('kerusakanAlat.index')->with('success', 'Kerusakan alat berhasil ditambahkan');
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        return view('kerusakanAlat.edit', compact('kerusakanAlat'));
    }

    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'jumlah' => 'required|integer',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        $kerusakanAlat->update($request->all());
        return redirect()->route('kerusakanAlat.index')->with('success', 'Kerusakan alat berhasil diperbarui');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $kerusakanAlat = KerusakanAlat::findOrFail($id);
        $kerusakanAlat->delete();
        return redirect()->route('kerusakanAlat.index')->with('success', 'Kerusakan alat berhasil dihapus');
    }
}
