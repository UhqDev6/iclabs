<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->bigIncrements('id_jadwal');
            $table->dateTime('waktu');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('assistants')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_status');
            $table->foreign('id_status')->references('id_status')->on('status')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_praktikum');
            $table->foreign('id_praktikum')->references('id_praktikum')->on('praktikum')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_ruangan');
            $table->foreign('id_ruangan')->references('id_ruangan')->on('ruangan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
