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
    <!-- end of page level css -->

    <style>
        .form-box input[type="text"] {
            border-radius: 5px 5px 0 0;
            text-transform: none;
        }
    </style>
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
            {!! Form::model($phone, ['url' => URL::to('confirm'), 'method' => 'post', 'name'=>'screen', 'class' => 'bf']) !!}
            {{csrf_field()}}
            <div class="form">
                <p class="form-control-static">@lang('One-Time Password (OTP)')</p>
                {!! Form::text('otp', $phone->otp, ['class' => 'form-control', 'placeholder'=>trans('eg: U3N5bw')])!!}
                @if (session('error'))<p class="text-danger">{!! session('error') !!}</p>@endif
                <button class="btn btn-info btn-block login" id="index" type="submit">@lang('Validate')</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/holder.js') }}"></script>
<!-- end of global js -->
<!-- begining of page level js-->
{{--<script src="{{ asset('assets/js/pages/lockscreen.js') }}"></script>--}}
<script src="{{ asset('assets/vendors/fort.js/js/fort.js') }}"></script>
<script>Fort.gradient();</script>
<!-- end of page level js-->
</body>
</html>
