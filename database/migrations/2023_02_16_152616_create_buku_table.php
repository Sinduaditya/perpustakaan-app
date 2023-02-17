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
        Schema::create('buku', function  (Blueprint $table) {
            $table->id('id_buku');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->integer('jumlah');
            $table->string('penggarang');
            $table->string('penerbit');
            $table->string('status_buku');
            $table->integer('tahun_terbit');
            $table->text('sinopsis_buku')->nullable();
            $table->string('kategori')->nullable();
            $table->string('cover_buku')->nullable();
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
        Schema::dropIfExists('buku');
    }
};