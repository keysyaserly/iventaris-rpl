<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStokBarangTable extends Migration
{
    public function up()
    {
        Schema::create('stok_barang', function (Blueprint $table) {  // Tabelnya 'stok_barang'
            $table->id();
            $table->string('nama_barang');
            $table->string('satuan');
            $table->integer('stok_awal');
            $table->integer('tambah_stok');
            $table->integer('jumlah_mutasi_keluar');
            $table->integer('sisa_stok');
            $table->decimal('angka_perolehan', 10, 2);
            $table->decimal('angka_penyusutan', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stok_barang');
    }
}
