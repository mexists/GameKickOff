<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Sentinel;

class JsonController extends JoshController {

	public function login() {
		?>
		<form method="post" action="<?= url('json/login') ?>">
			<input type="email" name="email" placeholder="Email"/>
			<input type="password" name="password" placeholder="Password"/>
			<input type="submit" name="submit" value="submit"/>
		</form>
		<?php
	}

	public function postLogin(Request $request) {
		try {
			// Try to log the user in
			if (Sentinel::authenticate($request->only('email', 'password'), $request->get('remember-me', 0))) {
				return response()->json(['status' => 'success', 'code' => '200', 'message' => trans('Success'), 'csrf_token' => csrf_token(), 'session_id' => session()->getId(),
					'user' => User::find(Sentinel::getUser()->getUserId())->toArray()]);
			} else {
				return response()->json(['status' => 'error', 'code' => '404', 'message' => trans('Username or password is incorrect')]);
			}
		} catch (Exception $e) {
			return response()->json(['status' => 'error', 'code' => $e->getCode(), 'message' => $e->getMessage()]);
		}

		return response()->json(['status' => 'error', 'code' => '404', 'message' => trans('Oops.. something went wrong')]);
	}
}
