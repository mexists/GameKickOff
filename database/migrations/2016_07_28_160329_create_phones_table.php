<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('phones', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->nullable();
			$table->string('number')->nullable();
			$table->string('otp')->nullable()->comment('One-Time Password');
			$table->integer('country_id')->nullable();
			$table->integer('phone_status_id')->nullable();
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('phones');
	}
}