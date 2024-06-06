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
        Schema::create('olahraga', function (Blueprint $table) {
          $table->id('id_katlapangan');
          $table->string('nama_katlapangan');
          $table->unique('nama_katlapangan');
          $table->double('harga_katlapangan');
          $table->string('file_katlapangan');
          $table->integer('jumlah_lapangan');
          $table->string('created_by');
          $table->string('updated_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olahraga');
    }
};
