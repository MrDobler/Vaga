<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriacaoDaTabelaPlanodesaude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_de_saude', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('nome')->unique()->nullable(false);
            $table->string('logo')->nullable(false);
            $table->boolean('status')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plano_de_saude');
    }
}
