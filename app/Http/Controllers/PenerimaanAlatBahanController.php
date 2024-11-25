<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanAlatBahan;
use Illuminate\Http\Request;

class PenerimaanAlatBahanController extends Controller
{
    // Menampilkan daftar penerimaan alat bahan
    public function index()
    {
        $penerimaan = PenerimaanAlatBahan::all(); // Ambil semua data penerimaan
        return view('penerimaan.index', compact('penerimaan'));
    }

    // Menampilkan form untuk menambah data penerimaan alat bahan
    public function create()
    {
        return view('penerimaan.create'); // Tampilkan form tambah data
    }

    // Menyimpan data penerimaan alat bahan
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_alat_bahan' => 'required|string',
            'spesifikasi' => 'required|string',
            'sumber_pengadaan' => 'required|string',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|string',
        ]);

        // Simpan data ke database
        PenerimaanAlatBahan::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('penerimaan.index')->with('success', 'Data penerimaan alat bahan berhasil disimpan.');
    }

    // Menampilkan form untuk mengedit data penerimaan alat bahan
    public function edit(PenerimaanAlatBahan $penerimaan)
    {
        return view('penerimaan.edit', compact('penerimaan')); // Tampilkan form edit
    }

    // Menyimpan perubahan data penerimaan alat bahan
    public function update(Request $request, PenerimaanAlatBahan $penerimaan)
    {
        // Validasi input
        $request->validate([
            'nama_alat_bahan' => 'required|string',
            'spesifikasi' => 'required|string',
            'sumber_pengadaan' => 'required|string',
            'jumlah' => 'required|integer',
            'kondisi' => 'required|string',
        ]);

        // Update data di database
        $penerimaan->update($request->all());

        // Redirect kembali dengan pesan sukses
        return redirect()->route('penerimaan.index')->with('success', 'Data penerimaan alat bahan berhasil diperbarui.');
    }

    // Menghapus data penerimaan alat bahan
    public function destroy(PenerimaanAlatBahan $penerimaan)
    {
        $penerimaan->delete(); // Hapus data penerimaan

        return redirect()->route('penerimaan.index')->with('success', 'Data penerimaan alat bahan berhasil dihapus.');
    }
}
