<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();  // Auto-increment primary key
            $table->string('nama_peminjam');  // Updated column name for borrower
            $table->enum('status_peminjam', ['karyawan', 'siswa', 'guru']);  // Status column for the borrower
            $table->text('keterangan');  // Description or notes
            $table->string('nama_barang');  // Name of the borrowed item
            $table->string('no_inventaris');  // Inventory number of the item
            $table->integer('jumlah');  // Quantity of the borrowed item
            $table->string('keadaan_waktu_dipinjam');  // Condition of the item when borrowed
            $table->timestamps();  // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
