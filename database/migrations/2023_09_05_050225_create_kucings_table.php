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
        Schema::create('kucings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kucing', 50);
            $table->string('warna', 50);
            $table->string('pemilik', 50);
            $table->date('tanggal_titip');
            $table->date('tanggal_pulang');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kucings');
    }
};
