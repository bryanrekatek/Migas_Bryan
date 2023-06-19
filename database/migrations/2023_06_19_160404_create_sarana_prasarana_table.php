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
        Schema::create('sarana_prasarana', function (Blueprint $table) {
            $table->id();
            $table->string('nama_moda');
            $table->string('jenis');
            $table->integer('nomor_identitas');
            $table->text('deskripsi');
            $table->string('lokasi');
            $table->float('kapasitas');
            $table->string('satuan');
            $table->date('tanggal_pembelian');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sarana_prasarana');
    }
};
