<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->bigIncrements('id_profil');
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('assistants')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->text('prestasi');
            $table->text('organisasi');
            $table->text('keterampilan');
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
        Schema::dropIfExists('profil');
    }
}
