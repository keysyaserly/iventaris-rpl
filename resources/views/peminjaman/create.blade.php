@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color: #007bff;">Tambah Data Peminjaman</h1>

        <div class="card p-4" style="background-color: #f8f9fa; border-radius: 10px;">
            <form action="{{ route('peminjaman.store') }}" method="POST">
                @csrf

                <div class="row mb-3">
                    <!-- Input Nama Peminjam -->
                    <div class="col-md-6">
                        <label for="nama_peminjam" style="font-weight: bold;">Nama Peminjam</label>
                        <input type="text" name="nama_peminjam" class="form-control" id="nama_peminjam" required>
                    </div>

                    <!-- Input Status Peminjam -->
                    <div class="col-md-6">
                        <label for="status_peminjam" style="font-weight: bold;">Status Peminjam</label>
                        <select name="status_peminjam" class="form-control" id="status_peminjam" required>
                            <option value="karyawan">Karyawan</option>
                            <option value="siswa">Siswa</option>
                            <option value="guru">Guru</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Input Keterangan -->
                    <div class="col-md-12">
                        <label for="keterangan" style="font-weight: bold;">Keterangan</label>
                        <textarea name="keterangan" class="form-control" id="keterangan" required></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Input Nama Barang -->
                    <div class="col-md-6">
                        <label for="nama_barang" style="font-weight: bold;">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="nama_barang" required>
                    </div>

                    <!-- Input No Inventaris -->
                    <div class="col-md-6">
                        <label for="no_inventaris" style="font-weight: bold;">No Inventaris</label>
                        <input type="text" name="no_inventaris" class="form-control" id="no_inventaris" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <!-- Input Jumlah -->
                    <div class="col-md-6">
                        <label for="jumlah" style="font-weight: bold;">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                    </div>

                    <!-- Input Keadaan Barang Waktu Dipinjam -->
                    <div class="col-md-6">
                        <label for="keadaan_waktu_dipinjam" style="font-weight: bold;">Keadaan Barang Waktu Dipinjam</label>
                        <input type="text" name="keadaan_waktu_dipinjam" class="form-control" id="keadaan_waktu_dipinjam" required>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <button type="submit" class="btn btn-primary btn-block mt-3" style="background-color: #007bff; border-color: #007bff;">Simpan</button>
            </form>
        </div>
    </div>
@endsection
