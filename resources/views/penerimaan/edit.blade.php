@extends('layouts.app')

@section('content')
    <h1>Edit Penerimaan Alat Bahan</h1>

    <form action="{{ route('penerimaan.update', $penerimaan->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Digunakan untuk membuat HTTP request dengan metode PUT -->

        <div class="form-group">
            <label for="nama_alat_bahan">Nama Alat/Bahan</label>
            <input type="text" name="nama_alat_bahan" class="form-control" value="{{ old('nama_alat_bahan', $penerimaan->nama_alat_bahan) }}" required>
        </div>

        <div class="form-group">
            <label for="spesifikasi">Spesifikasi</label>
            <input type="text" name="spesifikasi" class="form-control" value="{{ old('spesifikasi', $penerimaan->spesifikasi) }}" required>
        </div>

        <div class="form-group">
            <label for="sumber_pengadaan">Sumber Pengadaan</label>
            <input type="text" name="sumber_pengadaan" class="form-control" value="{{ old('sumber_pengadaan', $penerimaan->sumber_pengadaan) }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $penerimaan->jumlah) }}" required>
        </div>

        <div class="form-group">
            <label for="kondisi">Kondisi</label>
            <input type="text" name="kondisi" class="form-control" value="{{ old('kondisi', $penerimaan->kondisi) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection
