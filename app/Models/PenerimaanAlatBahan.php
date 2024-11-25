<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaanAlatBahan extends Model
{
    use HasFactory;

    // Nama tabel yang terkait dengan model ini
    protected $table = 'penerimaan_alat_bahan';

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'nama_alat_bahan',
        'spesifikasi',
        'sumber_pengadaan',
        'jumlah',
        'kondisi'
    ];
}
