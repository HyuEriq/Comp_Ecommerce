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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained(
                table: 'kategori', indexName: 'id'
            );
            $table->string('nama_Produk');
            $table->string('foto_produk');
            $table->longText('diskripsi');
            $table->integer('berat');
            $table->integer('harga');
            $table->integer('jumlah_lihat')->default(0);
            $table->integer('jumlah_beli')->default(0);
            $table->integer('qty');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
