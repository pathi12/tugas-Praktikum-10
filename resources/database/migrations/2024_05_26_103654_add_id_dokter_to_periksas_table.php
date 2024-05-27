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
        Schema::table('periksas', function (Blueprint $table) {
            // Tambahkan kolom 'id_dokter' dengan tipe data unsignedBigInteger
            $table->unsignedBigInteger('id_dokter')->nullable();

            // Tambahkan constraint foreign key ke tabel 'dokter'
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('periksas', function (Blueprint $table) {
            // Drop kolom 'id_dokter' jika migrasi di-rollback
            $table->dropColumn('id_dokter');
        });
    }
};
