<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MetodoDownBuhosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('buhos', function(Blueprint $table)
		{
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

	 /* PARA UTILIZAR ESTE METODO SE EMPLEA    php artisan migrate:rollback */
	 /* Mas informacion en https://styde.net/modificando-migraciones-en-laravel/ */

	public function down()
	{
		Schema::table('buhos', function(Blueprint $table)
		{

			$table->dropColumn('nombre');
			
		});
	}

}
