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
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('customer_id');
            $table->string('no_polisi',10)->unique();
            $table->bigInteger('petugas_id');
            $table->bigInteger('montir_id');
            $table->date('tanggal_servis');
            $table->string('perbaikan',300);
            $table->string('status',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis');
    }
};
