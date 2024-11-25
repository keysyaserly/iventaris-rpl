<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermohonanTable extends Migration
{
    public function up()
    {
        Schema::create('permohonan', function (Blueprint $table) {
            $table->id(); // ID unik
            $table->string('nama_alat'); // Nama alat
            $table->string('no_inventaris'); // Nomor inventaris
            $table->integer('jumlah'); // Jumlah alat yang dipinjam
            $table->string('keadaan_waktu_dipinjam'); // Keadaan saat pinjam (baik/rusak)
            $table->string('nama_teknisi'); // Nama teknisi
            $table->timestamps(); // Created at dan Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('permohonan'); // Hapus tabel jika rollback
    }
}
