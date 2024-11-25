<!-- resources/views/stok_barang/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Stok Barang</h1>

    <form action="{{ route('stok_barang.update', $stokBarang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $stokBarang->nama_barang }}" required>
        </div>

        <div class="form-group">
            <label for="satuan">Satuan</label>
            <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $stokBarang->satuan }}" required>
        </div>

        <div class="form-group">
            <label for="stok_awal">Stok Awal</label>
            <input type="number" name="stok_awal" id="stok_awal" class="form-control" value="{{ $stokBarang->stok_awal }}" required>
        </div>

        <div class="form-group">
            <label for="tambah_stok">Tambah Stok</label>
            <input type="number" name="tambah_stok" id="tambah_stok" class="form-control" value="{{ $stokBarang->tambah_stok }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_mutasi_keluar">Jumlah Mutasi Keluar</label>
            <input type="number" name="jumlah_mutasi_keluar" id="jumlah_mutasi_keluar" class="form-control" value="{{ $stokBarang->jumlah_mutasi_keluar }}" required>
        </div>

        <div class="form-group">
            <label for="sisa_stok">Sisa Stok</label>
            <input type="number" name="sisa_stok" id="sisa_stok" class="form-control" value="{{ $stokBarang->sisa_stok }}" required>
        </div>

        <div class="form-group">
            <label for="angka_perolehan">Angka Perolehan</label>
            <input type="number" step="0.01" name="angka_perolehan" id="angka_perolehan" class="form-control" value="{{ $stokBarang->angka_perolehan }}" required>
        </div>

        <div class="form-group">
            <label for="angka_penyusutan">Angka Penyusutan</label>
            <input type="number" step="0.01" name="angka_penyusutan" id="angka_penyusutan" class="form-control" value="{{ $stokBarang->angka_penyusutan }}" required>
        </div>

        <div class="form-group">
            <label for="total">Total</label>
            <input type="number" step="0.01" name="total" id="total" class="form-control" value="{{ $stokBarang->total }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
