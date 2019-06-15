<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('servicos_os', function(Blueprint $table)
		{
			$table->integer('idServicos_os', true);
			$table->integer('os_id')->index('fk_servicos_os_os1');
			$table->integer('servicos_id')->index('fk_servicos_os_servicos1');
			$table->string('subTotal', 15)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('servicos_os');
	}

}
