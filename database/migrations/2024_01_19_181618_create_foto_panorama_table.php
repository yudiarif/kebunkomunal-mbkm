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
        Schema::create('foto_panorama', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('komoditi_id');
            $table->string('panorama1')->nullable();
            $table->string('panorama2')->nullable();
            $table->string('panorama3')->nullable();
            // Tambahan kolom lain sesuai kebutuhan
            $table->timestamps();

            // Kunci asing untuk hubungan dengan tabel user dan komoditi
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('komoditi_id')->references('id')->on('komoditi')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foto_panorama');
    }
};
