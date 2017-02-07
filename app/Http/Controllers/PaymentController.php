<?php

namespace App\Http\Controllers;

use Braintree\Configuration;
use Braintree\Transaction;
use Illuminate\Http\Request;

use App\Http\Requests;
use Omnipay\Braintree\Gateway;
use Sentinel;
use Cart;
use App\User;
use App\TokenPackage;

class PaymentController extends JoshController {

	public $gateway = null;

	public function __construct() {
		$this->gateway = new Gateway();
		$this->gateway->setMerchantId(getenv('BT_MERCHANT_ID'));
		$this->gateway->setPublicKey(getenv('BT_PUBLIC_KEY'));
		$this->gateway->setPrivateKey(getenv('BT_PRIVATE_KEY'));
		$this->gateway->setTestMode(getenv('BT_ENVIRONMENT') == 'sandbox');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$this->checkout();
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

	public function checkout() {
		$user = Sentinel::getUser();
		$CartItem = null;
		foreach(Cart::content() as $CartItem) ;

		$cardNumber = 4111111111111111;
		$amount = Cart::total();
		$clientToken = $this->gateway->clientToken()->send()->getToken();

		return view('payment.checkout', compact('user', 'clientToken', 'CartItem', 'amount'));
	}

	public function postCheckout(Request $request) {

//		$amount = number_format(floatval($request->get('amount')), 2);
		$nonce = $request->get('payment_method_nonce');

		$response = $this->gateway->purchase([
			'amount' => Cart::total() / Swap::latest('USD/MYR')->getValue(),
			'paymentMethodNonce' => $nonce,
			//'currency' => 'USD',
			'returnUrl' => 'https://walm.cryptical.tech/my-account',
		])->send();

		if ($response->isSuccessful()) {
			// payment was successful: update database
			$CartItem = null;
			foreach(Cart::content() as $CartItem) ;

			$User = User::find(Sentinel::getUser()->id);
			$User->token = TokenPackage::find($CartItem->id)->token + $User->token;
			$User->save();

			return redirect()->action('PaymentController@transaction', ['id' => $response->getTransactionReference()]);
		} elseif ($response->isRedirect()) {
			// redirect to offsite payment gateway
			$response->redirect();
		} else {
			// payment failed: display message to customer
			echo $response->getMessage();
		}
	}

	public function transaction($id) {

		Configuration::environment(getenv('BT_ENVIRONMENT'));
		Configuration::merchantId(getenv('BT_MERCHANT_ID'));
		Configuration::publicKey(getenv('BT_PUBLIC_KEY'));
		Configuration::privateKey(getenv('BT_PRIVATE_KEY'));

		$transaction = Transaction::find($id);
		$transactionSuccessStatuses = [
				Transaction::AUTHORIZED,
				Transaction::AUTHORIZING,
				Transaction::SETTLED,
				Transaction::SETTLING,
				Transaction::SETTLEMENT_CONFIRMED,
				Transaction::SETTLEMENT_PENDING,
				Transaction::SUBMITTED_FOR_SETTLEMENT
		];

		if (in_array($transaction->status, $transactionSuccessStatuses)) {
			$User = User::find(Sentinel::getUser()->id);
			$header = "Sweet Success!";
			$icon = "success";
			$message = "Thanks You $User->first_name $User->last_name. Your transaction has been successfully processed. You now can continue to receive update from us.";
		} else {
			$header = "Transaction Failed";
			$icon = "fail";
			$message = "Your transaction has a status of <b>{$transaction->getResponse()->getMessage()}</b>. See the Braintree API response and try again.";
		}

		return view('payment.transaction', compact('transaction', 'header', 'icon', 'message'));
	}
}
