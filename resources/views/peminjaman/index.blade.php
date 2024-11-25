@extends('layouts.app')

@section('content')
    <style>
        /* Styling untuk header tabel */
        table th {
            background-color: #5bc0de; /* Biru muda untuk header */
            color: white;  /* Teks berwarna putih */
            text-align: center;
            font-size: 18px;
            padding: 15px;
        }

        /* Styling untuk baris tabel */
        table tbody tr:nth-child(odd) {
            background-color: #f8f9fa; /* Putih gading untuk baris ganjil */
        }

        table tbody tr:nth-child(even) {
            background-color: #ffffff; /* Putih murni untuk baris genap */
        }

        table td {
            font-size: 16px; /* Ukuran font isi tabel lebih besar */
            padding: 15px;
            text-align: center;
        }

        /* Styling untuk tombol */
        .btn {
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #5bc0de; /* Biru muda */
            border-color: #5bc0de;
            color: white; /* Teks putih */
        }

        .btn-primary:hover {
            background-color: #31b0d5; /* Biru sedikit gelap pada hover */
            border-color: #31b0d5;
        }

        .btn-warning {
            background-color: #ffc107; /* Warna kuning untuk tombol Edit */
            border-color: #ffc107;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e0a800; /* Kuning lebih gelap pada hover */
        }

        .btn-danger {
            background-color: #dc3545; /* Merah untuk tombol Hapus */
            border-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333; /* Merah lebih gelap pada hover */
        }

        .btn-info {
            background-color: #17a2b8; /* Biru kehijauan untuk tombol Detail */
            border-color: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background-color: #138496; /* Biru kehijauan lebih gelap pada hover */
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

        /* Styling untuk judul halaman */
        h1 {
            font-size: 36px;
            text-align: center;
            color: #5bc0de; /* Biru muda untuk judul */
            margin-bottom: 30px;
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

            table th, table td {
                font-size: 14px;
                padding: 10px;
            }
        }

        /* Styling untuk container aksi tombol */
        .action-buttons {
            display: flex;
            justify-content: center; /* Align buttons horizontally */
            gap: 10px; /* Space between buttons */
        }
    </style>

    <h1>Data Peminjaman</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Peminjaman</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Peminjam</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Nama Barang</th>
                <th>No Inventaris</th>
                <th>Jumlah</th>
                <th>Keadaan Barang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjaman as $item)
                <tr>
                    <td>{{ $item->nama_peminjam }}</td>
                    <td>{{ ucfirst($item->status_peminjam) }}</td> <!-- Capitalize first letter of status -->
                    <td>{{ $item->keterangan }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->no_inventaris }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->keadaan_waktu_dipinjam }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('peminjaman.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('peminjaman.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="{{ route('peminjaman.show', $item) }}" class="btn btn-info">Detail</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
