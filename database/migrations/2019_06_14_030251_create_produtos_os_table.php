<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos_os', function(Blueprint $table)
		{
			$table->integer('idProdutos_os', true);
			$table->integer('quantidade');
			$table->integer('os_id')->index('fk_produtos_os_os1');
			$table->integer('produtos_id')->index('fk_produtos_os_produtos1');
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
		Schema::drop('produtos_os');
	}

}
