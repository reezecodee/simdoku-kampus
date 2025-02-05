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
        Schema::create('report_introductions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('laporan_id')->constrained('reports')->cascadeOnDelete();
            $table->text('latar_belakang')->nullable();
            $table->text('tujuan_kegiatan')->nullable();
            $table->text('manfaat_kegiatan')->nullable();
            $table->text('indikator_keberhasilan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('report_introductions');
    }
};
