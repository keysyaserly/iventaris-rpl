<!-- resources/views/kerusakanAlat/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Kerusakan Alat</h1>

        <form action="{{ route('kerusakanAlat.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" name="nama_alat" required>
            </div>

            <div class="mb-3">
                <label for="spesifikasi" class="form-label">Spesifikasi</label>
                <input type="text" class="form-control" name="spesifikasi" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
