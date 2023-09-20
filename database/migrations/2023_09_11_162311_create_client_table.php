<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->bigInteger('id_client')->autoIncrement();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('tel')->nullable();
            $table->string('adresse')->nullable();
            $table->string('photo')->nullable();
            $table->string('cni')->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('client');
    }
}
