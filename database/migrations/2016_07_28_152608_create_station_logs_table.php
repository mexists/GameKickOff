<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationLogsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		Schema::create('station_logs', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('station_id')->nullable();
			$table->timestamp('datetime')->nullable();
			$table->string('abs_pres')->nullable();
			$table->string('temperature')->nullable();
			$table->string('coupler_detached')->nullable();
			$table->string('coupler_attached')->nullable();
			$table->string('host_connected')->nullable();
			$table->string('stopped')->nullable();
			$table->string('end_of_file')->nullable();
			$table->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('station_logs');
	}
}