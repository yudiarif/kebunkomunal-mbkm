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
        Schema::create('komoditi_info_ayam', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('komoditi_id');
            $table->double('berat');
            $table->integer('kematian');
            $table->date('tanggal_pakan');
            $table->double('jumlah_pakan');
            $table->double('suhu');
            $table->double('amoniac');
            $table->integer('jumlah_slot');
            $table->timestamps();
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
        Schema::dropIfExists('komoditi_info_ayam');
    }
};
