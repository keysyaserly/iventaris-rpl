<?php

namespace App\Http\Controllers;

use App\Models\PerbaikanAlatPratikum;
use Illuminate\Http\Request;

class PerbaikanAlatPratikumController extends Controller
{
    // Show the list of repairs
    public function index()
    {
        $perbaikanAlatPratikum = PerbaikanAlatPratikum::all();
        return view('perbaikan_alat_pratikum.index', compact('perbaikanAlatPratikum'));
    }

    // Show the form to create a new repair
    public function create()
    {
        return view('perbaikan_alat_pratikum.create');
    }

    // Store a new repair record
    public function store(Request $request)
    {
        $request->validate([
            'nama_alat_pratikum' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'nama_teknisi' => 'nullable|string|max:255',
        ]);

        PerbaikanAlatPratikum::create($request->all());

        return redirect()->route('perbaikan_alat_pratikum.index')->with('success', 'Data berhasil disimpan!');
    }

    // Show the details of a single repair
    public function show($id)
    {
        $repair = PerbaikanAlatPratikum::findOrFail($id);
        return view('perbaikan_alat_pratikum.show', compact('repair'));
    }

    // Show the form to edit a repair record
    public function edit($id)
    {
        $repair = PerbaikanAlatPratikum::findOrFail($id);
        return view('perbaikan_alat_pratikum.edit', compact('repair'));
    }

    // Update a repair record
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat_pratikum' => 'required|string|max:255',
            'spesifikasi' => 'required|string|max:255',
            'keterangan' => 'required|string',
            'nama_teknisi' => 'nullable|string|max:255',
        ]);

        $repair = PerbaikanAlatPratikum::findOrFail($id);
        $repair->update($request->all());

        return redirect()->route('perbaikan_alat_pratikum.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Delete a repair record
    public function destroy($id)
    {
        $repair = PerbaikanAlatPratikum::findOrFail($id);
        $repair->delete();

        return redirect()->route('perbaikan_alat_pratikum.index')->with('success', 'Data berhasil dihapus!');
    }
}
