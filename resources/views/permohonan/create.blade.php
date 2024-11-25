@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Permohonan</h1>

        <form action="{{ route('permohonan.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nama_alat">Nama Alat</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat" required>
            </div>

            <div class="form-group">
                <label for="no_inventaris">No Inventaris</label>
                <input type="text" class="form-control" id="no_inventaris" name="no_inventaris" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
            </div>

            <div class="form-group">
                <label for="keadaan_waktu_dipinjam">Keadaan Waktu Dipinjam</label>
                <input type="text" class="form-control" id="keadaan_waktu_dipinjam" name="keadaan_waktu_dipinjam" required>
            </div>

            <div class="form-group">
                <label for="nama_teknisi">Nama Teknisi</label>
                <input type="text" class="form-control" id="nama_teknisi" name="nama_teknisi" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Simpan Permohonan</button>
        </form>
    </div>
@endsection
