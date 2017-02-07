<?php

namespace App\Http\Controllers;

use App\Phone;
use App\User;
use Guzzle\Http\Client;
use Illuminate\Http\Request;
use Sentinel;
use Lang;
use Redirect;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class AccountController extends JoshController {
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

	public function confirm() {
		if (Session::has('confirmPhoneNumber'))
			return redirect('register')->with('success', trans('Please provide us your details.'));

		$phone = new Phone();
		return view('account.confirm', compact('phone'));
	}

	public function postConfirm(Request $request) {
		if ($phone = Phone::where('otp', '=', $request->input('otp'))->first() and $phone->phone_status_id == 2) {
			Session::put('confirmPhoneNumber', $phone->number);
			return redirect('register')->with('success', trans('Please provide us your details.'));
		} else
			return redirect('confirm')->with('error', trans('OTP not found.'));
	}

	public function reset() {
//		Session::forget('resetPhoneNumber');
		return view('account.reset');
	}

	public function postReset(Request $request) {
		if ($request->has('_phone') and (trim($request->input('_phone')) != "")) {
			$phone = trim($request->input('_phone'));
			if (!Phone::where('number', '=', $phone)->exists())
				return back()->with('error', trans('Your phone number are not registered.'));

			$otp = $this->generateOTP();
			(new TwilioSMSController())->send($phone, "Your OTP code: $otp");
			Session::put('resetPhoneNumber', $phone);
			Session::put('resetOTP', $otp);
			if ($request->ajax())
				return 'true';
			return redirect()->back();
		}

		if (Session::has('resetOTP') and $request->has('otp')) {
			$_phone = Session::get('resetPhoneNumber');
			$_otp = Session::get('resetOTP');
			/*echo $_otp . "   " . $request->input('otp');
			dd($request->input('otp') !== $_otp);*/

			if ($request->input('otp') !== $_otp)
				return redirect()->back()->with('error', 'OTP code is not valid!');

			$phone = Phone::where('number', '=', $_phone)->first();
			$phone->otp = $_otp;
			$phone->phone_status_id = 1;
			$phone->save();
			$user = User::find($phone->user_id);
			$user->password = \Hash::make($_otp);
			$user->save();

			$inputs = ['email' => $user->email, 'password' => $_otp];
			// Try to log the user in
			if (Sentinel::authenticate($inputs, true)) {
				Session::forget('resetPhoneNumber');
				Session::forget('resetOTP');

				return Redirect::route("my-account")
					->with('success', Lang::get('auth/message.login.success'))
					->with('warning', trans('Your password now is changed to your OTP code. Please change your password.'));
			} else {
				return Redirect::to('login')->with('error', 'Username or password is incorrect.');
			}
		}

		return redirect()->back()->with('error', 'Please enter your phone number.');
	}
}

