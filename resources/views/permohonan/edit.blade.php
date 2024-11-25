@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Permohonan</h1>

        <form action="{{ route('permohonan.update', $permohonan->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_alat">Nama Alat</label>
                <input type="text" class="form-control" id="nama_alat" name="nama_alat" value="{{ $permohonan->nama_alat }}" required>
            </div>

            <div class="form-group">
                <label for="no_inventaris">No Inventaris</label>
                <input type="text" class="form-control" id="no_inventaris" name="no_inventaris" value="{{ $permohonan->no_inventaris }}" required>
            </div>

            <div class="form-group">
                <label for="jumlah">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $permohonan->jumlah }}" required>
            </div>

            <div class="form-group">
                <label for="keadaan_waktu_dipinjam">Keadaan Waktu Dipinjam</label>
                <input type="text" class="form-control" id="keadaan_waktu_dipinjam" name="keadaan_waktu_dipinjam" value="{{ $permohonan->keadaan_waktu_dipinjam }}" required>
            </div>

            <div class="form-group">
                <label for="nama_teknisi">Nama Teknisi</label>
                <input type="text" class="form-control" id="nama_teknisi" name="nama_teknisi" value="{{ $permohonan->nama_teknisi }}" required>
            </div>

            <button type="submit" class="btn btn-success mt-3">Update Permohonan</button>
        </form>
    </div>
@endsection
