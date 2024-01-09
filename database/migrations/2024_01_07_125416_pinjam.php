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
        Schema::create('pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->bigInteger('id_buku')->unsigned();
            $table->enum('status_pinjam', ['PENDING', 'DIPINJAM', 'DIKEMBALIKAN']);
            $table->timestamps();
            $table->foreign('id_user')->references('nik')->on('users');
            $table->foreign('id_buku')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjam');
    }
};
