<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->integer('nip');
            $table->string('nama_guru');
            $table->string('nama_barang');
            $table->date('tanggal_peminjaman');
            $table->integer('jumlah_barang_dipinjam');
            $table->integer('id_barang');
            $table->string('status_peminjaman');
            $table->string('keperluan');
            $table->string('keterangan');
            $table->string('kategori_barang');
            $table->string('tempat_ruangan');
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
        Schema::dropIfExists('peminjaman');
    }
};
