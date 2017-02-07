<!DOCTYPE html>
<html>

<head>
    <title>Lock Screen | Real-time WaLM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="{{ asset('assets/css/pages/activate.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/vendors/fort.js/css/fort.css') }}"/>

    <link href="{{ asset('assets/vendors/intl-tel-input/build/css/intlTelInput.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <!-- end of page level css -->
    <!-- global js -->
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
</head>

<body>
<div class="top">
    <div class="colors"></div>
</div>
<div class="container">
    <div class="login-container">
        <div id="output"></div>
        <div class="avatar"></div>
        <div class="form-box">
            <form method="post" id="form" action="{{url('reset')}}">
                {{csrf_field()}}

                <div class="form">
                    @if(!Session::has('resetPhoneNumber'))
                        <input type="hidden" id="_phone" name="_phone"/>
                        <p class="form-control-static">@lang('Enter your phone number')</p>
                        <input type="tel" class="form-control" id="phone" name="phone"><br>
                        <span id="valid-msg" class="hide text-success">✓ Valid</span>
                        <span id="error-msg" class="hide text-danger">Invalid number</span>
                    @else
                        <div class="alert alert-success">
                            @lang('OTP has been sent to your number').
                            <a href="#" id="request-otp" data-loading-text="@lang('Sending code')..."
                               style="font-weight: bold" onclick="getOTP(this)"
                               class="text-info">@lang('Request another code')</a>
                        </div>
                        <br/>
                        <p class="form-control-static">@lang('One-Time Password OTP')</p>
                        <input type="text" class="form-control" id="otp" name="otp" placeholder="eg: U3N5bw"
                               style="text-transform: none !important;">
                    @endif
                    @if (session('error'))<p class="text-danger">{!! session('error') !!}</p>@endif
                    <button class="btn btn-info btn-block login" id="index" type="submit">
                        {{!Session::has('resetPhoneNumber')? trans('Next') : trans('Reset My Phone Number')}}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/holder.js') }}"></script>
<!-- end of global js -->
<!-- begining of page level js-->
{{--<script src="{{ asset('assets/js/pages/lockscreen.js') }}"></script>--}}
<script src="{{ asset('assets/vendors/fort.js/js/fort.js') }}"></script>
<script>Fort.gradient();</script>

{{-- page level scripts --}}
<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('assets/vendors/intl-tel-input/js/intlTelInput.min.js') }}"
        type="text/javascript"></script>
{{--<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}"></script>--}}
<script src="{{ asset('assets/js/pages/validation.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        //     $("#phone").intlTelInput(); //https://github.com/jackocnr/intl-tel-input
        $(".country-list").css({'text-align': 'left'});

        /*var countryData = $("#phone").intlTelInput("getSelectedCountryData");
         console.log(countryData.dialCode);*/

        $('#phone').blur(function (e) {
            $("#_phone").val($("#phone").intlTelInput("getNumber"));
        });

    });

    function getOTP(eThis) {

        var $btn = $(eThis);
        $btn.button('loading');
        $.ajax({
            type: 'post',
            url: '{{url('reset')}}',
            dataType: 'JSON',
            data: {
                '_token': '{{csrf_token()}}',
                '_phone': '{{Session::get('resetPhoneNumber')}}'
            }
        }).done(function (data) {
            $btn.button('reset');
        });
    }
</script>

<!-- end of page level js-->
</body>
</html>
