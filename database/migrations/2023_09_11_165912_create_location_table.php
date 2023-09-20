<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->bigInteger('id_location')->autoIncrement();
            $table->bigInteger('id_client');
            $table->foreign("id_client")->references('id_client')->on('client');
            $table->bigInteger('id_voiture');
            $table->foreign("id_voiture")->references('id_voiture')->on('voiture');
            $table->dateTime('date_sortie_voiture')->nullable();
            $table->dateTime('date_prevue_retour')->nullable();
            $table->dateTime('date_retour_effectif')->nullable();
            $table->string('observation')->nullable();
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
        Schema::dropIfExists('location');
    }
}
