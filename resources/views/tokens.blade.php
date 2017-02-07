@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Price
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/price.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Token Packages</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="money" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Token Packages
            </div>
        </div>
    </div>
    @stop


    {{-- Page content --}}
    @section('content')
            <!-- Container Section Start -->
    <div class="container">
        <div class="row">
            <h2> TOKEN PACKAGES</h2>
            <form action="{{ url('token/list') }}" method="POST">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                @foreach ($TokenPackages as $token_package)
                    <div class="col-md-3 col-sm-6">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">
                                <h3 class="text-white">{!! $token_package->title !!}</h3>
                            </div>
                            <div class="panel-body text-center">
                                <div class="box_round_symboll">
                                    RM{!! $token_package->price !!}
                                </div>
                                <h4 class="success">Per Month</h4>
                                <ul>
                                    <li>{!! $token_package->token !!} {!! $token_package->description !!}</li>
                                </ul>
                                <a class="btn price-btn" href="{{action('FrontEndController@getTokens', ['id' => $token_package->id])}}">Sign up</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </form>
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
