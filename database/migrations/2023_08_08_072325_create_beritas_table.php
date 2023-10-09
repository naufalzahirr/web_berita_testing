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
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->id();
            $table->string('kreator');
            $table->string('id_kategori');
            $table->string('judul_berita');
            $table->string('isi_berita');
            $table->string('gambar_berita');
            $table->string('slug');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tb_berita');
    }
};
