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
        Schema::create('kamila', function (Blueprint $table) {
            $table->string('Nama_depan');
            $table->string('Nama_belakang');
            $table->string('Jenis_kelamin');
            $table->string('Agama');
            $table->string('Alamat');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamila');
    }
};
