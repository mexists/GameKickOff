<html>
<head>
    <title>
        @section('title')
            | Welcome to {{config("custom.application.shortName")}}
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel=stylesheet type=text/css href="{{ asset('assets/vendors/braintree/css/app.css') }}">
    <link rel=stylesheet type=text/css href="{{ asset('assets/vendors/braintree/css/overrides.css') }}">
    <!--global js starts-->
    <script src="{{ asset('assets/vendors/braintree/js/jquery-2.1.4.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/braintree/js/jquery.lettering-0.6.1.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/braintree/js/braintree-checkout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
</head>
<body>

<header class="main">
    <div class="container wide">
        <div class="content slim">
            <div class="set">
                <div class="fill">
                    <a class="pseudoshop" href="/">Real-time<strong> WaLM</strong></a>
                </div>

                <div class="fit">
                    <a class="braintree" href="https://developers.braintreepayments.com/guides/drop-in" target="_blank">Powered by Braintree</a>
                </div>
            </div>
        </div>
    </div>

    <div class="notice-wrapper">
        @if(isset($_SESSION["errors"]))
            <div class="show notice error notice-error">
                <span class="notice-message">{{$_SESSION["errors"]}} <?php unset($_SESSION["errors"]) ?></span>
            </div>
        @endif
    </div>
</header>

@yield('content')

<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
@yield('js-script')

</body>
</html>
