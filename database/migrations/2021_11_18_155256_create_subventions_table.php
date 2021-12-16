<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Date') ;
            $table->integer('Montant') ;
            $table->string('donateur') ;
            $table->string('cooperative') ;
            $table->string('Motif');
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
        Schema::dropIfExists('subventions');
    }
}
