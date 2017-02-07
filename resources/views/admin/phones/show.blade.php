@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
phone
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Phones</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>phones</li>
        <li class="active">phones</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    phone {{ $phone->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $phone->id }}</td></tr>
                     <tr><td>number</td><td>{{ $phone['number'] }}</td></tr>
					<tr><td>country_id</td><td>{{ $phone['country_id'] }}</td></tr>
					<tr><td>phone_status_id</td><td>{{ $phone['phone_status_id'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop