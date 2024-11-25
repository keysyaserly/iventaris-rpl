@extends('layouts.app')

@section('content')
    <h1>Tambah Penerimaan Alat Bahan</h1>

    <form action="{{ route('penerimaan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_alat_bahan">Nama Alat/Bahan</label>
            <input type="text" name="nama_alat_bahan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="spesifikasi">Spesifikasi</label>
            <input type="text" name="spesifikasi" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="sumber_pengadaan">Sumber Pengadaan</label>
            <input type="text" name="sumber_pengadaan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <input type="text" name="kondisi" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
