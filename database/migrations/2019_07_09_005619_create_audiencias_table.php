<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudienciasTable extends Migration 
{
	public function up()
	{
		Schema::create('audiencias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->timestamp('data_hora');
            $table->text('descricao');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('audiencias');
	}
}
