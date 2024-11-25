@extends('layouts.app')

@section('content')
    <h1>Detail Peminjaman</h1>

    <div class="card">
        <div class="card-header">
            <h3>Informasi Peminjaman</h3>
        </div>
        <div class="card-body">
            <p><strong>Nama Peminjam:</strong> {{ $peminjaman->nama_peminjam }}</p>
            <p><strong>Status Peminjam:</strong> {{ ucfirst($peminjaman->status_peminjam) }}</p>
            <p><strong>Keterangan:</strong> {{ $peminjaman->keterangan }}</p>
            <p><strong>Nama Barang:</strong> {{ $peminjaman->nama_barang }}</p>
            <p><strong>No Inventaris:</strong> {{ $peminjaman->no_inventaris }}</p>
            <p><strong>Jumlah:</strong> {{ $peminjaman->jumlah }}</p>
            <p><strong>Keadaan Barang:</strong> {{ $peminjaman->keadaan_waktu_dipinjam }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Kembali ke Daftar Peminjaman</a>
        </div>
    </div>
@endsection
