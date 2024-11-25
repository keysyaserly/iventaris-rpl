<!-- resources/views/kerusakanAlat/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Kerusakan Alat</h1>

        <form action="{{ route('kerusakanAlat.update', $kerusakanAlat->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_alat" class="form-label">Nama Alat</label>
                <input type="text" class="form-control" name="nama_alat" value="{{ $kerusakanAlat->nama_alat }}" required>
            </div>

            <div class="mb-3">
                <label for="spesifikasi" class="form-label">Spesifikasi</label>
                <input type="text" class="form-control" name="spesifikasi" value="{{ $kerusakanAlat->spesifikasi }}" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" name="jumlah" value="{{ $kerusakanAlat->jumlah }}" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan">{{ $kerusakanAlat->keterangan }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
