<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipamentosOsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipamentos_os', function(Blueprint $table)
		{
			$table->integer('idEquipamentos_os', true);
			$table->string('defeito_declarado', 200)->nullable();
			$table->string('defeito_encontrado', 200)->nullable();
			$table->string('solucao', 45)->nullable();
			$table->integer('equipamentos_id')->nullable()->index('fk_equipamentos_os_equipanentos1_idx');
			$table->integer('os_id')->nullable()->index('fk_equipamentos_os_os1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipamentos_os');
	}

}
