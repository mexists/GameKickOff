@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
station_log
@parent
@stop

@section('content')
<section class="content-header">
    <h1>StationLogs</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>station_logs</li>
        <li class="active">station_logs</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    station_log {{ $station_log->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $station_log->id }}</td></tr>
                     <tr><td>station_id</td><td>{{ $station_log['station_id'] }}</td></tr>
					<tr><td>datetime</td><td>{{ $station_log['datetime'] }}</td></tr>
					<tr><td>abs_pres</td><td>{{ $station_log['abs_pres'] }}</td></tr>
					<tr><td>temperature</td><td>{{ $station_log['temperature'] }}</td></tr>
					<tr><td>coupler_detached</td><td>{{ $station_log['coupler_detached'] }}</td></tr>
					<tr><td>coupler_attached</td><td>{{ $station_log['coupler_attached'] }}</td></tr>
					<tr><td>host_connected</td><td>{{ $station_log['host_connected'] }}</td></tr>
					<tr><td>stopped</td><td>{{ $station_log['stopped'] }}</td></tr>
					<tr><td>end_of_file</td><td>{{ $station_log['end_of_file'] }}</td></tr>

                </table>
            </div>
        </div>
    </div>
</div>
@stop