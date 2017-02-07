<?php

namespace App\Http\Controllers;

use App\Phone;
use App\SmsListenerLog;
use Illuminate\Http\Request;
use Twilio;
use App\Http\Requests;

class TwilioSMSController extends JoshController {
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

	public function send($toNumber, $message) {
		$appName = config("custom.application.name");
		//return Twilio::message($toNumber, "$message \n-$appName"); //send sms*/
		return Twilio::message($toNumber, "$message"); //send sms*/
	}

	public function listener(Request $request) {

		/*$_REQUEST = json_decode('{
    "ToCountry": "US",
    "ToState": "AL",
    "SmsMessageSid": "SM509301db24d87e2cdb56bd5f18ae55f6",
    "NumMedia": "0",
    "ToCity": "",
    "FromZip": "",
    "SmsSid": "SM509301db24d87e2cdb56bd5f18ae55f6",
    "FromState": "",
    "SmsStatus": "received",
    "FromCity": "",
    "Body": "On fans sembrong ",
    "FromCountry": "MY",
    "To": "+12057327853",
    "ToZip": "",
    "NumSegments": "1",
    "MessageSid": "SM509301db24d87e2cdb56bd5f18ae55f6",
    "AccountSid": "AC9b3a296bf1ccc243b381855a9692a2ee",
    "From": "+60196896594",
    "ApiVersion": "2010-04-01"
}', true);*/

		SmsListenerLog::create(['response' => json_encode($request->all())]);

		$reply = null;
		$from = $request->input('From');
		$body = $request->input('Body');

		if (is_string($body)) {
			$words = preg_replace("/\\s{2,}/", " ", strtoupper(trim($body)));
			$words = preg_split("/\\s/", $words);

			$command = $words[0];
			$system = $words[1];

			switch ($command) {
				case 'ON':
					if (Phone::where('number', '=', $from)->exists()) {
						$reply = trans("Phone number exists. To reset please go to " . preg_replace("@^https?://@", "", url("reset")));
					}
					elseif ($Phone = Phone::find($this->registerPhoneNumber($from)))
						$reply = trans("Your OTP code: {$Phone->otp} .Please visit " . preg_replace("@^https?://@", "", url("confirm")));
					break;
				case 'OFF':
					if ($Phone = Phone::where('number', '=', $from)->first()){
						$Phone->phone_status_id = 2;
						$Phone->save();
						$reply = trans("Your SMS service has been deactivated. TQ");
					}
					break;
				default:
					$reply = trans("Oops! looks like something is wrong. Please try again.");
			}
		} else {
			$reply = trans("Invalid text format.");
		}

		$appName = config("custom.application.name");
		/*$content = "<?xml version='1.0' encoding='UTF-8'?><Response><Message>$reply \n- $appName</Message></Response>";*/
		$content = "<?xml version='1.0' encoding='UTF-8'?><Response><Message>$reply</Message></Response>";

		return response($content, 200)->header('Content-Type', 'text/xml');//reply sms
	}

	/**
	 * @param $fromNumber
	 * @return int Phone id
	 */
	public function registerPhoneNumber($fromNumber) {


		$phone = new Phone();
		$phone->number = $fromNumber;
		$phone->otp = $this->generateOTP();
		$phone->country_id = 1;
		$phone->phone_status_id = 2;// 1=active, 2=inactive
		$phone->save();
		return $phone->id;
	}

}
