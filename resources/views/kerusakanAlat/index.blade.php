<!-- resources/views/kerusakanAlat/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Kerusakan Alat</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('kerusakanAlat.create') }}" class="btn btn-primary mb-3">Tambah Kerusakan Alat</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Alat</th>
                    <th>Spesifikasi</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kerusakanAlat as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_alat }}</td>
                        <td>{{ $item->spesifikasi }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <a href="{{ route('kerusakanAlat.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('kerusakanAlat.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
