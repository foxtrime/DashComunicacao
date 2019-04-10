<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJorgefacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jorgefaces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_seguidores');
            $table->integer('envolvimento');
            $table->integer('total_curtidas');
            $table->integer('crescimento');
            $table->integer('total_publicacoes');
            $table->integer('reacoes');
            $table->integer('comentarios');
            $table->integer('compartilhamentos');
            $table->enum('mes',['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']);
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
        Schema::dropIfExists('jorgefaces');
    }
}
