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
      Schema::create('servis_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->string('no_polisi');
            $table->string('merek_mobil');
            $table->string('jenis_servis');
            $table->date('tanggal_servis');
            $table->integer('biaya_servis');
            $table->text('keluhan');
            $table->string('status_servis');
            $table->timestamps();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servis_mobils');
    }
};
