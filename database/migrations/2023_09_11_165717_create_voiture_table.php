<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoitureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voiture', function (Blueprint $table) {
            $table->bigInteger('id_voiture')->autoIncrement();
            $table->string('nom_voiture')->nullable();
            $table->string('boite_vitesse')->nullable();
            $table->integer('puissance')->nullable();
            $table->integer('nbre_porte')->nullable();
            $table->string('carburant')->nullable();
            $table->integer('nbre_cylindre')->nullable();
            $table->integer('soupape')->nullable();
            $table->integer('vitesse_max')->nullable();
            $table->string('carosserie')->nullable();
            $table->string('transmission')->nullable();
            $table->string('frein')->nullable();
            $table->integer('acceleration')->nullable();
            $table->string('couleur')->nullable();
            $table->string('image_principale')->nullable();
            $table->string('image_secondaire')->nullable();
            $table->string('image_tertiaire')->nullable();
            $table->bigInteger('modele_id')->nullable();
            $table->foreign("modele_id")->references('id_modele')->on('modele');
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
        Schema::dropIfExists('voiture');
    }
}
