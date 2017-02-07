@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
station_logs List
@parent
@stop

{{-- Page content --}}
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
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    StationLogs List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.station_logs.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Station_id</th>
							<th>Datetime</th>
							<th>Abs_pres</th>
							<th>Temperature</th>
							<th>Coupler_detached</th>
							<th>Coupler_attached</th>
							<th>Host_connected</th>
							<th>Stopped</th>
							<th>End_of_file</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($station_logs as $station_log)
                        <tr>
                            <td>{!! $station_log->id !!}</td>
                            <td>{!! $station_log->station_id !!}</td>
							<td>{!! $station_log->datetime !!}</td>
							<td>{!! $station_log->abs_pres !!}</td>
							<td>{!! $station_log->temperature !!}</td>
							<td>{!! $station_log->coupler_detached !!}</td>
							<td>{!! $station_log->coupler_attached !!}</td>
							<td>{!! $station_log->host_connected !!}</td>
							<td>{!! $station_log->stopped !!}</td>
							<td>{!! $station_log->end_of_file !!}</td>
                            <td>
                                <a href="{{ route('admin.station_logs.show', $station_log->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view station_log"></i>
                                </a>
                                <a href="{{ route('admin.station_logs.edit', $station_log->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit station_log"></i>
                                </a>
                                <a href="{{ route('admin.station_logs.confirm-delete', $station_log->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete station_log"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>    <!-- row-->
</section>
@stop

{{-- Body Bottom confirm modal --}}
@section('footer_scripts')
<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
@stop
