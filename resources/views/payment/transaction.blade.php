@extends('payment.layout')
{{-- Page title --}}
@section('title')
    Transaction Complete
@parent
@stop
@section('content')

<div class="wrapper">
    <div class="response container">
        <div class="content">
            <div class="icon">
                <img src="{{asset("assets/vendors/braintree/images/$icon.svg")}}" alt="">
            </div>

            <h1>{{$header}}</h1>
            <section>
                <p>{{$message}}</p>
            </section>
            <section>
                <a class="button primary back" href="{{action('FrontEndController@myAccount')}}">
                    <span>Back to My Account</span>
                </a>
            </section>
        </div>
    </div>
</div>

<aside class="drawer dark">
    <header>
        <div class="content compact">
            <a href="https://developers.braintreepayments.com" class="braintree" target="_blank">Braintree</a>

            <h3>Payment Details</h3>
        </div>
    </header>

    <article class="content compact">
        <section>
            <h5>Transaction</h5>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{$transaction->id}}</td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>{{$transaction->type}}</td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td>{{$transaction->amount}}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>{{$transaction->status}}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{$transaction->createdAt->format('Y-m-d H:i:s')}}</td>
                </tr>
                <tr>
                    <td>Updated At</td>
                    <td>{{$transaction->updatedAt->format('Y-m-d H:i:s')}}</td>
                </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h5>Payment</h5>

            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>Token</td>
                    <td>{{$transaction->creditCardDetails->token}}</td>
                </tr>
                <tr>
                    <td>Bin</td>
                    <td>{{$transaction->creditCardDetails->bin}}</td>
                </tr>
                <tr>
                    <td>Last Four(4) Number</td>
                    <td>{{$transaction->creditCardDetails->last4}}</td>
                </tr>
                <tr>
                    <td>Card Type</td>
                    <td>{{$transaction->creditCardDetails->cardType}}</td>
                </tr>
                <tr>
                    <td>Expiration Date</td>
                    <td>{{$transaction->creditCardDetails->expirationDate}}</td>
                </tr>
                <tr>
                    <td>Cardholder Name</td>
                    <td>{{$transaction->creditCardDetails->cardholderName}}</td>
                </tr>
                <tr>
                    <td>Customer Location</td>
                    <td>{{$transaction->creditCardDetails->customerLocation}}</td>
                </tr>
                </tbody>
            </table>
        </section>

        <?php if (!is_null($transaction->customerDetails->id)) : ?>
        <section>
            <h5>Customer Details</h5>
            <table cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{$transaction->customerDetails->id}}</td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td>{{$transaction->customerDetails->firstName}}</td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>{{$transaction->customerDetails->lastName}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$transaction->customerDetails->email}}</td>
                </tr>
                <tr>
                    <td>Company</td>
                    <td>{{$transaction->customerDetails->company}}</td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>{{$transaction->customerDetails->website}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$transaction->customerDetails->phone}}</td>
                </tr>
                <tr>
                    <td>Fax</td>
                    <td>{{$transaction->customerDetails->fax}}</td>
                </tr>
                </tbody>
            </table>
        </section>
        <?php endif; ?>

        {{--<section><p class="center small">Integrate with the Braintree SDK for a secure and seamless checkout</p></section>--}}

        <section>
            {{--<a class="button secondary full" href="https://developers.braintreepayments.com/guides/drop-in"
               target="_blank">
                <span>See the Docs</span>
            </a>--}}
        </section>
    </article>
</aside>
@stop
