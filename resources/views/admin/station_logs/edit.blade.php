@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a station_log
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
        <li class="active">Create New station_log</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit station_log
                    </h4>
                </div>
                <div class="panel-body">
                     @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {!! Form::model($station_log, ['method' => 'PATCH', 'action' => ['StationLogsController@update', $station_log->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('station_id', 'Station Id: ') !!}
                        {!! Form::text('station_id', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('datetime', 'Datetime: ') !!}
                        {!! Form::text('datetime', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('abs_pres', 'Abs Pres: ') !!}
                        {!! Form::text('abs_pres', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('temperature', 'Temperature: ') !!}
                        {!! Form::text('temperature', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('coupler_detached', 'Coupler Detached: ') !!}
                        {!! Form::text('coupler_detached', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('coupler_attached', 'Coupler Attached: ') !!}
                        {!! Form::text('coupler_attached', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('host_connected', 'Host Connected: ') !!}
                        {!! Form::text('host_connected', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('stopped', 'Stopped: ') !!}
                        {!! Form::text('stopped', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('end_of_file', 'End Of File: ') !!}
                        {!! Form::text('end_of_file', null, ['class' => 'form-control']) !!}
                    </div>



                    <div class="form-group">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</section>
@stop