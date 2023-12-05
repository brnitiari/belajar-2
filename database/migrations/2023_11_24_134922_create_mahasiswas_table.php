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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->char('NIM')->unique();
            $table->string('Nama');
            $table->char('User');
            $table->string('Password')->nullable();
            $table->string('Jurusan');
            $table->string('Prodi');
            $table->string('Kelas');
            // $table->unsignedBigInteger('id_akun');
            // $table->foreign('id_akun')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
