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
        Schema::create('tb_pengaturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klinik');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->text('maps_embed')->nullable();
            $table->text('deskripsi_singkat')->nullable();
            $table->string('jam_operasional')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsapp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengaturan');
    }
};
