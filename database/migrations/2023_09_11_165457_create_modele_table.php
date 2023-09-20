<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModeleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modele', function (Blueprint $table) {
            $table->bigInteger('id_modele')->autoIncrement();
            $table->string('modele_name')->nullable();
            $table->year('annee')->nullable();
            $table->bigInteger('marque_id');
            $table->foreign("marque_id")->references('id_marque')->on('marque');
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
        Schema::dropIfExists('modele');
    }
}
