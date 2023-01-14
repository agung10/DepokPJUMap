<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            // Pelapor
            $table->id('laporan_id');
            $table->string('no_laporan', 50);
            $table->string('nama_pelapor', 50);
            $table->string('email_pelapor', 100);
            $table->string('no_hp', 50);
            $table->string('gambar');
            $table->text('deskripsi');
            $table->string('bukti_warga');
            $table->string('kategori');

            // Manajemen
            $table->string('status')->nullable();
            $table->text('keterangan')->nullable();

            // Alamat
            $table->unsignedBigInteger('kecamatan_id');
            $table->unsignedBigInteger('kelurahan_id');
            $table->text('detail_alamat');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
