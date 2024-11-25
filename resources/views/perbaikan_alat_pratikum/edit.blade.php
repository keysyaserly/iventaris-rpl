<!-- resources/views/perbaikan_alat_pratikum/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Perbaikan Alat Pratikum</title>
</head>
<body>

    <h1>Edit Perbaikan Alat Pratikum</h1>

    <form action="{{ route('perbaikan_alat_pratikum.update', $repair->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama_alat_pratikum">Nama Alat Pratikum:</label>
        <input type="text" name="nama_alat_pratikum" id="nama_alat_pratikum" value="{{ $repair->nama_alat_pratikum }}" required><br><br>

        <label for="spesifikasi">Spesifikasi:</label>
        <input type="text" name="spesifikasi" id="spesifikasi" value="{{ $repair->spesifikasi }}" required><br><br>

        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" id="keterangan" required>{{ $repair->keterangan }}</textarea><br><br>

        <label for="nama_teknisi">Nama Teknisi (optional):</label>
        <input type="text" name="nama_teknisi" id="nama_teknisi" value="{{ $repair->nama_teknisi }}"><br><br>

        <button type="submit">Perbarui</button>
    </form>

    <a href="{{ route('perbaikan_alat_pratikum.index') }}">Kembali ke Daftar</a>

</body>
</html>
