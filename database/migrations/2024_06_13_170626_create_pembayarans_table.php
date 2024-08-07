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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('servis_id');
            $table->string('no_polisi',10)->unique();
            $table->string('perbaikan',10);
            $table->date('tanggal_pembayaran');
            $table->Integer('harga',500);
            $table->Integer('bayar',500);
            $table->Integer('kembalian',500);
            $table->string('status',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
