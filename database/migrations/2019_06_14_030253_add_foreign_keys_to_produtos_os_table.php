<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('produtos_os', function(Blueprint $table)
		{
			$table->foreign('os_id', 'fk_produtos_os_os1')->references('idOs')->on('os')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('produtos_id', 'fk_produtos_os_produtos1')->references('idProdutos')->on('produtos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('produtos_os', function(Blueprint $table)
		{
			$table->dropForeign('fk_produtos_os_os1');
			$table->dropForeign('fk_produtos_os_produtos1');
		});
	}

}
