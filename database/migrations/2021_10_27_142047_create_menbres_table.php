<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenbresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menbres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom') ;
            $table->string('Prenom') ;
            $table->string('Contact') ;
            $table->string('Genre') ;
            $table->string('Specialite');
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
        Schema::dropIfExists('menbres');
    }
}
