<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerusakanAlatTable extends Migration
{
    public function up()
    {
        Schema::create('kerusakan_alat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('spesifikasi');
            $table->integer('jumlah');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kerusakan_alat');
    }
}
