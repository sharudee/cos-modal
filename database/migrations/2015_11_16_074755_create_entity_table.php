<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entity', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('entity_code',8);
			$table->string('entity_tname',100);
			$table->string('entity_ename', 100);
			$table->string('cust_grp', 4);
			$table->decimal('tax_rate',5,2);
			$table->string('ent_ctrl',4);
			$table->string('dsgrp_type',4);
			$table->string('sale_type',8);
			$table->string('ret_type',8);
			$table->string('upd_by',15);
			$table->date('upd_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entity');
	}

}
