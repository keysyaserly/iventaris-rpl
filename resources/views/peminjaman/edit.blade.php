@extends('layouts.app')

@section('content')
    <style>
        /* Styling untuk header form */
        h1 {
            font-size: 36px;
            text-align: center;
            color: #5bc0de; /* Biru muda untuk judul */
            margin-bottom: 30px;
        }

        /* Styling untuk form */
        .form-group label {
            font-size: 16px;
            color: #333;
        }

        .form-control {
            font-size: 16px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 5px;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        /* Styling untuk tombol Update */
        .btn-primary {
            background-color: #5bc0de; /* Biru muda */
            border-color: #5bc0de;
            color: white;
        }

        .btn-primary:hover {
            background-color: #31b0d5; /* Biru sedikit gelap pada hover */
            border-color: #31b0d5;
        }

        /* Alert Messages */
        .alert {
            font-size: 18px;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }

        .alert-danger {
            background-color: #dc3545;
            color: white;
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px; /* Ukuran font judul lebih kecil di layar kecil */
            }

            .btn {
                font-size: 16px;
                padding: 10px 15px; /* Ukuran tombol lebih kecil di layar kecil */
            }

            .form-control {
                font-size: 14px;
            }
        }
    </style>

    <h1>Edit Data Peminjaman</h1>

    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menambahkan method PUT untuk update -->

        <div class="form-group">
            <label for="nama_peminjam">Nama Peminjam</label>
            <input type="text" name="nama_peminjam" class="form-control" value="{{ old('nama_peminjam', $peminjaman->nama_peminjam) }}" required>
        </div>

        <div class="form-group">
            <label for="status_peminjam">Status Peminjam</label>
            <select name="status_peminjam" class="form-control" required>
                <option value="karyawan" {{ $peminjaman->status_peminjam == 'karyawan' ? 'selected' : '' }}>Karyawan</option>
                <option value="siswa" {{ $peminjaman->status_peminjam == 'siswa' ? 'selected' : '' }}>Siswa</option>
                <option value="guru" {{ $peminjaman->status_peminjam == 'guru' ? 'selected' : '' }}>Guru</option>
            </select>
        </div>

        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" required>{{ old('keterangan', $peminjaman->keterangan) }}</textarea>
        </div>

        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang', $peminjaman->nama_barang) }}" required>
        </div>

        <div class="form-group">
            <label for="no_inventaris">No Inventaris</label>
            <input type="text" name="no_inventaris" class="form-control" value="{{ old('no_inventaris', $peminjaman->no_inventaris) }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $peminjaman->jumlah) }}" required>
        </div>

        <div class="form-group">
            <label for="keadaan_waktu_dipinjam">Keadaan Barang</label>
            <input type="text" name="keadaan_waktu_dipinjam" class="form-control" value="{{ old('keadaan_waktu_dipinjam', $peminjaman->keadaan_waktu_dipinjam) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
