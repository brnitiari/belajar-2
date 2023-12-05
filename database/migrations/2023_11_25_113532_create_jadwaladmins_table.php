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
        Schema::create('jadwaladmins', function (Blueprint $table) {
            $table->id();
            $table->integer('Id_Jadwal')->unique();
            $table->integer('Id_Kelas');
            $table->string('Matakuliah');
            $table->integer('NIP')->nullable();
            $table->dateTime('Jam_Mulai');
            $table->dateTime('Jam_Berakhir');
            $table->date('Tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwaladmins');
    }
};
