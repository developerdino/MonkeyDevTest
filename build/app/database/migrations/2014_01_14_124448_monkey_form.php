<?php

use Illuminate\Database\Migrations\Migration;

class MonkeyForm extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monkeyform', function($table)
		{
			$table->increments('id');
			$table->string('firstName');
			$table->string('lastName');
			$table->string('email');
			$table->string('phone');
			$table->string('address');
			$table->string('suburb');
			$table->enum('state', array('ACT','NSW','NT','QLD','SA','TAS','VIC','WA'));
			$table->string('postcode');
			$table->enum('enquiryType', array('General enquiry','Product feedback or enquiry','Product complaint'));
			$table->string('productName')->nullable();
			$table->string('productSize')->nullable();
			$table->string('useByDate')->nullable();
			$table->string('batchCode')->nullable();
			$table->text('enquiry')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('monkeyform');
	}

}