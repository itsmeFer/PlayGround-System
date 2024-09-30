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
        Schema::table('anaks', function (Blueprint $table) {
            // Mengubah tipe data kontak_orang_tua menjadi string
            $table->string('kontak_orang_tua')->change();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('anaks', function (Blueprint $table) {
            // Kembalikan perubahan ke tipe integer
            $table->integer('kontak_orang_tua')->change();

        });
    }
};
