<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnteproyectosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anteproyectos', function(Blueprint $table)
		{
			
			$table->string('Id_anteproyecto');
			$table->string('Nombre');
			$table->string('Descripcion');
			$table->string('fecha');
			$table->string('Empresa Responsable');
			$table->primary('Id_anteproyecto');
			$table->string('Revisor')->unsigned();
			$table->foreign('Revisor')->references('No_Control_Revisor')->on('revisores');
			$table->string('Asesor')->unsigned();
			$table->foreign('Asesor')->references('No_Control_Asesor')->on('asesores');
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
		Schema::drop('anteproyectos');
	}

}
