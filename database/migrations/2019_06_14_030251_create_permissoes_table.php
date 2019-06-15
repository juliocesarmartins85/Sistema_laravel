<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissoes', function(Blueprint $table)
		{
			$table->integer('idPermissao', true);
			$table->string('nome', 80);
			$table->text('permissoes', 65535)->nullable();
			$table->boolean('situacao')->nullable();
			$table->date('data')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permissoes');
	}

}
