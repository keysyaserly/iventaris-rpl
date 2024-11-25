<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang sesuai dengan database
    protected $table = 'permohonan';  // Pastikan nama tabel sesuai tanpa 's' di akhir

    // Field yang bisa diisi
    protected $fillable = [
        'nama_alat', 'no_inventaris', 'jumlah', 'keadaan_waktu_dipinjam', 'nama_teknisi',
    ];
}
