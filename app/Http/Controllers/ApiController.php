<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ApiController extends JoshController
{
    //

	public function smsSend(Request $request){
		$toNumber = "+{$request->get('toNumber')}";
		$message = $request->get('message');

		(new \App\Http\Controllers\TwilioSMSController())->send($toNumber, $message);

		return response()->json(['status' => 'success', 'code' => '1', 'message' => trans('SMS sent')]);
	}
}
