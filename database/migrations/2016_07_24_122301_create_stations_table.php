<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('stations', function (Blueprint $table) {
			$table->increments('id');
			$table->string('number')->nullable();
			$table->string('name')->nullable();
			$table->integer('river_id')->nullable();
			$table->string('river_level')->nullable();
			$table->string('normal_level')->nullable();
			$table->string('alert_level')->nullable();
			$table->string('warning_level')->nullable();
			$table->string('danger_level')->nullable();
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('stations');
	}
}