<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi jamak
    protected $table = 'peminjaman';  // Nama tabel yang benar

    // Fields yang bisa diisi
    protected $fillable = [
        'nama_peminjam',
        'status_peminjam',
        'keterangan',
        'nama_barang',
        'no_inventaris',
        'jumlah',
        'keadaan_waktu_dipinjam',
    ];
}
