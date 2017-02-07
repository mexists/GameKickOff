@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
Edit a station
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
        <li class="active">Create New station</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        Edit station
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

                    {!! Form::model($station, ['method' => 'PATCH', 'action' => ['StationsController@update', $station->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('code', 'Code: ') !!}
                        {!! Form::text('code', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('name', 'Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('river_id', 'River Id: ') !!}
                        {!! Form::text('river_id', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('river_level', 'River Level: ') !!}
                        {!! Form::text('river_level', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('normal_level', 'Normal Level: ') !!}
                        {!! Form::text('normal_level', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('alert_level', 'Alert Level: ') !!}
                        {!! Form::text('alert_level', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('warning_level', 'Warning Level: ') !!}
                        {!! Form::text('warning_level', null, ['class' => 'form-control']) !!}
                    </div>

					<div class="form-group">
                        {!! Form::label('danger_level', 'Danger Level: ') !!}
                        {!! Form::text('danger_level', null, ['class' => 'form-control']) !!}
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