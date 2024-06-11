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
        Schema::create('mahasiswamodels', function (Blueprint $table) {
            $table->id();
            $table->biginteger('nim',10)->unique();
            $table->string('nama mahasiswa',30)->nullable();
            $table->text('alamat');
            $table->date('tgl lahir')->nullable();
            $table->enum('jk',['L','P'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswamodels');
    }
};
