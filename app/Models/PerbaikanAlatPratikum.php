<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerbaikanAlatPratikum extends Model
{
    use HasFactory;

    protected $table = 'perbaikan_alat_pratikum'; // Table name
    protected $fillable = [
        'nama_alat_pratikum',
        'spesifikasi',
        'keterangan',
        'nama_teknisi',
    ];
}
