<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration 
{
	public function up()
	{
		Schema::create('pessoas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cpf');
            $table->string('endereco');
            $table->string('telefone');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('pessoas');
	}
}
