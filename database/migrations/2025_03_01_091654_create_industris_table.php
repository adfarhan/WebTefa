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
        Schema::create('industris', function (Blueprint $table) {
            $table->id();
            $table->string('nama_industri');
            $table->date('tanggal_kerjasama');
            $table->string('profile_industri');
            $table->string('alamat_industri');
            $table->string('kontak_industri');
            $table->string('email_industri');
            $table->string('bidang_konsentrasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('industris');
    }
};
