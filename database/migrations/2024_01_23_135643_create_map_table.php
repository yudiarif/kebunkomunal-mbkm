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
        Schema::create('map', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('komoditi_id');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('alamat');
            $table->string('link_google_map');
            $table->timestamps();

            // Definisi kunci asing
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
        Schema::dropIfExists('map');
    }
};
