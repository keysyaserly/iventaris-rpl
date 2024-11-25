<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    // Menampilkan daftar stok barang
    public function index()
    {
        // Mengambil semua data stok barang
        $stokBarang = StokBarang::all();
        return view('stok_barang.index', compact('stokBarang'));
    }

    // Menampilkan form untuk menambah stok barang
    public function create()
    {
        return view('stok_barang.create');
    }

    // Menyimpan data stok barang baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'satuan' => 'required|string|max:50',
            'stok_awal' => 'required|integer',
            'tambah_stok' => 'required|integer',
            'jumlah_mutasi_keluar' => 'required|integer',
            'sisa_stok' => 'required|integer',
            'angka_perolehan' => 'required|numeric',
            'angka_penyusutan' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Simpan data stok barang ke database
        StokBarang::create($request->all());

        return redirect()->route('stok_barang.index')->with('success', 'Data stok barang berhasil ditambahkan.');
    }

    // Menampilkan detail stok barang
    public function show($id)
    {
        // Mengambil data stok barang berdasarkan ID
        $stokBarang = StokBarang::findOrFail($id);
        return view('stok_barang.show', compact('stokBarang'));
    }

    // Menampilkan form untuk mengedit stok barang
    public function edit($id)
    {
        // Mengambil data stok barang berdasarkan ID
        $stokBarang = StokBarang::findOrFail($id);
        return view('stok_barang.edit', compact('stokBarang'));
    }

    // Mengupdate data stok barang
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'satuan' => 'required|string|max:50',
            'stok_awal' => 'required|integer',
            'tambah_stok' => 'required|integer',
            'jumlah_mutasi_keluar' => 'required|integer',
            'sisa_stok' => 'required|integer',
            'angka_perolehan' => 'required|numeric',
            'angka_penyusutan' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        // Mengupdate data stok barang
        $stokBarang = StokBarang::findOrFail($id);
        $stokBarang->update($request->all());

        return redirect()->route('stok_barang.index')->with('success', 'Data stok barang berhasil diperbarui.');
    }

    // Menghapus data stok barang
    public function destroy($id)
    {
        // Menghapus data stok barang berdasarkan ID
        $stokBarang = StokBarang::findOrFail($id);
        $stokBarang->delete();

        return redirect()->route('stok_barang.index')->with('success', 'Data stok barang berhasil dihapus.');
    }
}
