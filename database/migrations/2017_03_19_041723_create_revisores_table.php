<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('revisores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre');
			$table->string('Email');
			$table->string('Area');
			$table->string('Contraseña');
			$table->string('No_Control_Revisor');
			$table->primary('No_Control_Revisor');
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
		Schema::drop('revisores');
	}

}
