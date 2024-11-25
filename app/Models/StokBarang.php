<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StokBarang extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai dengan konvensi plural default
    protected $table = 'stok_barang';  // Tambahkan ini jika tabel di database adalah 'stok_barang'

    protected $fillable = [
        'nama_barang',
        'satuan',
        'stok_awal',
        'tambah_stok',
        'jumlah_mutasi_keluar',
        'sisa_stok',
        'angka_perolehan',
        'angka_penyusutan',
        'total',
    ];
}
