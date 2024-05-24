<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('komoditi_info_jagung', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('komoditi_id');
            // $table->unsignedBigInteger('pupuk_id')->nullable();
            $table->double('tinggi');
            $table->integer('kematian');
            $table->double('kehijauan');
            // $table->date('tanggal_pupuk')->nullable();
            $table->double('ph_tanah');
            $table->integer('jumlah_slot');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('komoditi_id')->references('id')->on('komoditi')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('pupuk_id')->references('id')->on('pupuk')->onDelete('set null')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('komoditi_info_jagung');
    }
};
