<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marque', function (Blueprint $table) {
            $table->bigInteger('id_marque')->autoIncrement();
            $table->string('name')->nullable();
            $table->bigInteger('categorie_id');
            $table->foreign("categorie_id")->references('id_cat')->on('categorie');
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
        Schema::dropIfExists('marque');
    }
}
