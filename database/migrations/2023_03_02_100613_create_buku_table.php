<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->integer('id_petugas');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->string('thn_terbit');
            $table->integer('jml_buku');
            $table->string('lokasi');
            $table->date('tgl_input');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
