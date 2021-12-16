<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateUtilsateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilsateurs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date') ;
            $table->integer('Vehicule') ;
            $table->integer('Materiel') ;
            $table->integer('employés') ;
            $table->integer('Imprevue');
            $table->integer('Total');
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
        Schema::dropIfExists('utilsateurs');
    }
}
