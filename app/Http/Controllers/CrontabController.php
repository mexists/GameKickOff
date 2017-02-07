<?php

namespace App\Http\Controllers;

use App\Phone;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class CrontabController extends JoshController {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

	public function run() {
		$StationLog = \App\StationLog::orderBy('id', 'desc')->first();
		$Station = \App\Station::find($StationLog->station_id);
		$River = \App\River::find($Station->river_id);
		$State = \App\State::find($River->state_id);

		$datetime = Carbon::now()->format('D,d/m/y h:ia');

		$msg = "[UPDATE] $datetime\nStation($Station->number): $Station->name, $State->name
Water Level: {$Station->river_level}M
Temperature: {$StationLog->temperature}°C";

		$phones = Phone::where('phone_status_id', '=', 1)->get();
		foreach($phones as $phone)
			(new TwilioSMSController())->send($phone->number, $msg);

		return 'true';
	}
}
