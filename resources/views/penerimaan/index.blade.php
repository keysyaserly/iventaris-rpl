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
    </style>

    <h1>Data Penerimaan Alat Bahan</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('penerimaan.create') }}" class="btn btn-primary mb-3">Tambah Penerimaan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Alat/Bahan</th>
                <th>Spesifikasi</th>
                <th>Sumber Pengadaan</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penerimaan as $item)
                <tr>
                    <td>{{ $item->nama_alat_bahan }}</td>
                    <td>{{ $item->spesifikasi }}</td>
                    <td>{{ $item->sumber_pengadaan }}</td>
                    <td>{{ $item->jumlah }}</td>
                    <td>{{ $item->kondisi }}</td>
                    <td>
                        <a href="{{ route('penerimaan.edit', $item) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('penerimaan.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
