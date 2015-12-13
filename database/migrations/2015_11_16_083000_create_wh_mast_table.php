<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhMastTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wh_mast', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('wh_code',8);
			$table->string('wh_tdesc',60);
			$table->string('wh_edesc',60);
			$table->string('address1',50);
			$table->string('address2',50);
			$table->string('tel',50);
			$table->string('contact_name',60);
			$table->string('status',2);
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
		Schema::drop('wh_mast');
	}

}
