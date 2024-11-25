<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    // Menampilkan daftar permohonan
    public function index()
    {
        $permohonan = Permohonan::all(); // Mengambil semua data permohonan
        return view('permohonan.index', compact('permohonan')); // Mengirim data ke view
    }

    // Menampilkan form untuk membuat permohonan baru
    public function create()
    {
        return view('permohonan.create'); // Menampilkan form tambah permohonan
    }

    // Menyimpan permohonan baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_alat' => 'required|string',
            'no_inventaris' => 'required|string',
            'jumlah' => 'required|integer',
            'keadaan_waktu_dipinjam' => 'required|string',
            'nama_teknisi' => 'required|string|max:255',
        ]);

        // Menyimpan permohonan ke database
        Permohonan::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil disimpan.');
    }

    // Menampilkan form untuk mengedit permohonan
    public function edit(Permohonan $permohonan)
    {
        return view('permohonan.edit', compact('permohonan')); // Menampilkan form edit permohonan
    }

    // Menyimpan perubahan permohonan
    public function update(Request $request, Permohonan $permohonan)
    {
        // Validasi input
        $request->validate([
            'nama_alat' => 'required|string',
            'no_inventaris' => 'required|string',
            'jumlah' => 'required|integer',
            'keadaan_waktu_dipinjam' => 'required|string',
            'nama_teknisi' => 'required|string|max:255',
        ]);

        // Update permohonan di database
        $permohonan->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil diperbarui.');
    }

    // Menghapus permohonan
    public function destroy(Permohonan $permohonan)
    {
        // Menghapus data permohonan
        $permohonan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('permohonan.index')->with('success', 'Permohonan berhasil dihapus.');
    }
}
