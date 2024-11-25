<?php
namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    // Menampilkan daftar data peminjaman
    public function index()
    {
        $peminjaman = Peminjaman::all(); // Retrieve all 'peminjaman' data
        return view('peminjaman.index', compact('peminjaman')); // Pass data to view
    }

    // Menampilkan form untuk menambah data peminjaman
    public function create()
    {
        return view('peminjaman.create'); // Show form to create new peminjaman
    }

    // Menyimpan data peminjaman baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_peminjam' => 'required|string', // Validate 'nama_peminjam' field
            'status_peminjam' => 'required|in:karyawan,siswa,guru', // Validate 'status_peminjam' is one of these values
            'keterangan' => 'required|string', // Validate 'keterangan' field
            'nama_barang' => 'required|string', // Validate 'nama_barang' field
            'no_inventaris' => 'required|string', // Validate 'no_inventaris' field
            'jumlah' => 'required|integer', // Validate 'jumlah' (quantity) field
            'keadaan_waktu_dipinjam' => 'required|string', // Validate 'keadaan_waktu_dipinjam' field
        ]);

        // Menyimpan data peminjaman ke dalam database
        Peminjaman::create([
            'nama_peminjam' => $request->nama_peminjam,
            'status_peminjam' => $request->status_peminjam,
            'keterangan' => $request->keterangan,
            'nama_barang' => $request->nama_barang,
            'no_inventaris' => $request->no_inventaris,
            'jumlah' => $request->jumlah,
            'keadaan_waktu_dipinjam' => $request->keadaan_waktu_dipinjam,
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil disimpan.');
    }

    // Menampilkan form untuk mengedit data peminjaman
    public function edit(Peminjaman $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman')); // Pass the peminjaman instance to the edit view
    }

    // Menyimpan perubahan data peminjaman
    public function update(Request $request, Peminjaman $peminjaman)
    {
        // Validasi input
        $request->validate([
            'nama_peminjam' => 'required|string',
            'status_peminjam' => 'required|in:karyawan,siswa,guru',
            'keterangan' => 'required|string',
            'nama_barang' => 'required|string',
            'no_inventaris' => 'required|string',
            'jumlah' => 'required|integer',
            'keadaan_waktu_dipinjam' => 'required|string',
        ]);

        // Update the data in the database
        $peminjaman->update([
            'nama_peminjam' => $request->nama_peminjam,
            'status_peminjam' => $request->status_peminjam,
            'keterangan' => $request->keterangan,
            'nama_barang' => $request->nama_barang,
            'no_inventaris' => $request->no_inventaris,
            'jumlah' => $request->jumlah,
            'keadaan_waktu_dipinjam' => $request->keadaan_waktu_dipinjam,
        ]);

        // Redirect back to the index page with a success message
        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil diperbarui.');
    }

    // Menyimpan perubahan data peminjaman
    public function destroy($id)
    {
        // Find the Peminjaman record by ID
        $peminjaman = Peminjaman::findOrFail($id);

        // Delete the record
        $peminjaman->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('peminjaman.index')->with('success', 'Data peminjaman berhasil dihapus.');
    }
}
