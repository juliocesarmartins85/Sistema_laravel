<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipamentos', function(Blueprint $table)
		{
			$table->integer('idEquipamentos', true);
			$table->string('equipamento', 150);
			$table->string('num_serie', 80)->nullable();
			$table->string('modelo', 80)->nullable();
			$table->string('cor', 45)->nullable();
			$table->string('descricao', 150)->nullable();
			$table->string('tensao', 45)->nullable();
			$table->string('potencia', 45)->nullable();
			$table->string('voltagem', 45)->nullable();
			$table->date('data_fabricacao')->nullable();
			$table->integer('marcas_id')->nullable()->index('fk_equipanentos_marcas1_idx');
			$table->integer('clientes_id')->nullable()->index('fk_equipanentos_clientes1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipamentos');
	}

}
