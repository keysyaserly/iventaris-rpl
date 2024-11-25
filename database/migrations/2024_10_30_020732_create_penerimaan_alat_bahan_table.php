<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenerimaanAlatBahanTable extends Migration
{
    public function up()
    {
        Schema::create('penerimaan_alat_bahan', function (Blueprint $table) {
            $table->id(); // ID unik
            $table->string('nama_alat_bahan'); // Nama alat/bahan
            $table->string('spesifikasi'); // Spesifikasi
            $table->string('sumber_pengadaan'); // Sumber pengadaan
            $table->integer('jumlah'); // Jumlah
            $table->string('kondisi'); // Kondisi (baik/rusak)
            $table->timestamps(); // Created at dan Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('penerimaan_alat_bahan'); // Hapus tabel jika rollback
    }
}
