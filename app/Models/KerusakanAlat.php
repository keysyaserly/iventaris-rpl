<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerusakanAlat extends Model
{
    use HasFactory;

    // If your table name is different from the default plural form of the model
    protected $table = 'kerusakan_alat'; // Ensure this matches your table name

    protected $fillable = [
        'nama_alat',
        'spesifikasi',
        'jumlah',
        'keterangan',
    ];
}
