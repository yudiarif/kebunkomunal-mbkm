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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Kolom ID otomatis
            $table->string('nama'); // Nama user
            $table->string('username')->unique(); // Username unik
            $table->string('no_hp')->unique(); // Nomor HP unik
            $table->string('foto')->nullable(); // Nomor HP unik
            $table->string('password'); // Password user
            $table->string('signed_url')->nullable();
            $table->unsignedBigInteger('role_id')->default(2); // Kolom role_id
            $table->timestamp('created_at')->useCurrent(); // Waktu pembuatan record
            $table->timestamp('updated_at')->useCurrent(); // Waktu update record

            // Menambahkan foreign key constraint ke tabel roles
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
