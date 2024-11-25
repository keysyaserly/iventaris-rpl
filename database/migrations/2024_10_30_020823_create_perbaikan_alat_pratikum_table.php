<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerbaikanAlatPratikumTable extends Migration
{
    public function up()
    {
        Schema::create('perbaikan_alat_pratikum', function (Blueprint $table) {
            $table->id(); // ID unik
            $table->string('nama_alat_pratikum'); // Nama alat pratikum yang diperbaiki
            $table->string('spesifikasi'); // Spesifikasi
            $table->text('keterangan'); // Keterangan
            $table->string('nama_teknisi')->nullable(); // nama teknisi (opsional)
            $table->timestamps(); // Created at dan Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('perbaikan_alat_pratikum'); // Hapus tabel jika rollback
    }
}
