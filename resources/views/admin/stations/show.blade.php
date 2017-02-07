@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
station
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Stations</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>stations</li>
        <li class="active">stations</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    station {{ $station->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $station->id }}</td></tr>
                     <tr><td>code</td><td>{{ $station['code'] }}</td></tr>
					<tr><td>name</td><td>{{ $station['name'] }}</td></tr>
					<tr><td>river_id</td><td>{{ $station['river_id'] }}</td></tr>
					<tr><td>river_level</td><td>{{ $station['river_level'] }}</td></tr>
					<tr><td>normal_level</td><td>{{ $station['normal_level'] }}</td></tr>
					<tr><td>alert_level</td><td>{{ $station['alert_level'] }}</td></tr>
					<tr><td>warning_level</td><td>{{ $station['warning_level'] }}</td></tr>
					<tr><td>danger_level</td><td>{{ $station['danger_level'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop