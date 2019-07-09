<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration 
{
	public function up()
	{
		Schema::create('links', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('link');
            $table->timestamps();
        });
	}

	public function down()
	{
		Schema::drop('links');
	}
}
