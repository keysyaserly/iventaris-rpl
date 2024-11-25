@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4" style="color: #5bc0de; font-weight: 600;">Daftar Permohonan</h1>

        <a href="{{ route('permohonan.create') }}" class="btn btn-info mb-3">Tambah Permohonan</a>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Nama Alat</th>
                    <th>No Inventaris</th>
                    <th>Jumlah</th>
                    <th>Keadaan Waktu Dipinjam</th>
                    <th>Nama Teknisi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permohonan as $item)
                    <tr>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->no_inventaris }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->keadaan_waktu_dipinjam }}</td>
                        <td>{{ $item->nama_teknisi }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('permohonan.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('permohonan.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus permohonan ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

<!-- Custom CSS -->
<style>
    body {
        background-color: #f4f6f9; /* Soft gray background */
        color: #333; /* Text color */
        font-family: 'Arial', sans-serif;
    }

    .container {
        background-color: white; /* White background for container */
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #5bc0de; /* Light blue color for the title */
        font-weight: 600;
    }

    .btn-info {
        background-color: #5bc0de; /* Light blue button */
        border: none;
    }

    .btn-info:hover {
        background-color: #31b0d5; /* Darker light blue on hover */
    }

    .btn-warning {
        background-color: #ffc107; /* Yellow button */
        border: none;
    }

    .btn-warning:hover {
        background-color: #e0a800; /* Darker yellow on hover */
    }

    .btn-danger {
        background-color: #dc3545; /* Red button for delete */
        border: none;
    }

    .btn-danger:hover {
        background-color: #c82333; /* Darker red on hover */
    }

    /* Table styling */
    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: left;
        vertical-align: middle;
    }

    /* Header row */
    .thead-light {
        background-color: #5bc0de; /* Light blue background for the header */
        color: white; /* White text in the header */
    }

    /* Body row */
    .table tbody tr {
        background-color: #ffffff; /* White background for table rows */
    }

    /* Hover effect for table rows */
    .table tbody tr:hover {
        background-color: #f1f1f1; /* Light gray background on row hover */
    }

    /* Success alert styling */
    .alert {
        margin-bottom: 20px;
        border-radius: 5px;
    }
</style>
