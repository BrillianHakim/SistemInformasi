<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // membuat sebuah tabel baru dalam basis data dengan nama 'dokter'
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();// Kolom ID sebagai primary key dengan tipe data big integer unsigned
            $table->string('nama');
            $table->string('spesialis');
            $table->integer('nomer_telepon');
            $table->string('email');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
};
