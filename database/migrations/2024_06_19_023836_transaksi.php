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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->constrained('tagihan')->references('id');
            $table->text('invoice_id')->nullable();
            $table->string('external_id')->nullable();
            $table->text('payment_link')->nullable();
            $table->bigInteger('harga');
            $table->bigInteger('total');
            $table->bigInteger('bayar')->nullable();
            $table->string('payment_status');
            $table->dateTime('expired')->nullable();
            $table->enum('status', ['proses','dikemas','dikirim','selesai']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
