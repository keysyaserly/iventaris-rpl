<!-- resources/views/perbaikan_alat_pratikum/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Perbaikan Alat Pratikum</title>
</head>
<body>

    <h1>Detail Perbaikan Alat Pratikum</h1>

    <p><strong>Nama Alat Pratikum:</strong> {{ $repair->nama_alat_pratikum }}</p>
    <p><strong>Spesifikasi:</strong> {{ $repair->spesifikasi }}</p>
    <p><strong>Keterangan:</strong> {{ $repair->keterangan }}</p>
    <p><strong>Nama Teknisi:</strong> {{ $repair->nama_teknisi }}</p>

    <a href="{{ route('perbaikan_alat_pratikum.index') }}">Kembali ke Daftar</a>

</body>
</html>
