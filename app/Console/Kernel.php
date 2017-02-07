<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel {
	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		\App\Console\Commands\Inspire::class,
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule) {
		$schedule->command('inspire')
				 ->everyMinute();

		$schedule->call(function () {
			$StationLog = \App\StationLog::orderBy('id', 'desc')->first();
			$Station = \App\Station::find($StationLog->station_id);
			$River = \App\River::find($Station->river_id);
			$State = \App\State::find($River->state_id);

			$datetime = \Carbon\Carbon::now()->format('D,d-m-y h:ia');

			$msg = "$datetime\nStation($Station->number): $Station->name, $State->name
Water Level: {$Station->river_level}M";
//Temperature: {$StationLog->temperature}C";

			$phones = \App\Phone::where('phone_status_id', '=', 1)->get();
			foreach($phones as $phone) {
				(new \App\Http\Controllers\TwilioSMSController())->send($phone->number, $msg);
				//echo (PHP_EOL."To: $phone->number\nMessage:\n$msg".PHP_EOL);
				$user = \App\User::find($phone->user_id);
				$user->token = $user->token - 1;
				$user->save();
			}
		})->everyMinute();
	}
}
