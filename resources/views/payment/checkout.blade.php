@extends('payment.layout')
{{-- Page title --}}
@section('title')
    Checkout
@parent
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <h3>Shopping Cart</h3>
            <table class="table table-responsive table-bordered">
                <thead>
                <tr><th>Package Name</th><th>Price</th></tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$CartItem->name}}</td><td>RM {{number_format($CartItem->price,2)}}</td>
                </tr>
                </tbody>
            </table>
            <caption>@lang('Total'): {{$amount}}</caption>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="wrapper">
                <div class="checkout container">

                    <header>
                        <h1>Hi {{$user->first_name}} {{$user->last_name}},<br>Let's begin a transaction</h1>
                        <p>
                            Make a test payment with Braintree using PayPal or a card
                        </p>
                    </header>

                    <form method="post" id="payment-form" action="{{url('payment/checkout')}}">
                        {!! csrf_field() !!}
                        <section>
                            <div class="bt-drop-in-wrapper">
                                <div id="bt-dropin"></div>
                            </div>

                            <label for="amount">
                                <span class="input-label">Amount</span>
                                <div class="input-wrapper amount-wrapper">
                                    <input id="amount" name="amount" type="tel" min="10" placeholder="Amount" value="{{$amount}}" readonly="readonly" />
                                </div>
                            </label>
                        </section>

                        <button class="button" type="submit"><span>Pay Now!</span></button>
                        <input type="hidden" name="clientToken" value="{{$clientToken}}">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3"></div>
    </div>
</div>
@stop

@section('js-script')
    <script>
        var checkout = new DropInUI({
            formID: 'payment-form'
        })
        var client_token = "{{$clientToken}}";
        braintree.setup(client_token, "dropin", {
            container: "bt-dropin"
        });
    </script>
@stop