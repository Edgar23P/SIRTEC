<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Nombre');
			$table->string('Email');
			$table->string('Carrera');
			$table->string('email');
			$table->string('Contraseña');
			$table->string('No_Control');
			$table->primary('No_Control');
			$table->string('Id_anteproyecto')->unsigned();
			$table->foreign('Id_anteproyecto')->references('Id_anteproyecto')->on('anteproyectos');
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
		Schema::drop('alumnos');
	}

}
