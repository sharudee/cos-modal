<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocMastTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doc_mast', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('doc_code',4);
			$table->string('doc_desc',40);
			$table->string('doc_ctrl', 4);
			$table->string('ictran_code', 4);
			$table->string('post_type',4);
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
		Schema::drop('doc_mast');
	}

}
