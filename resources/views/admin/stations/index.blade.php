@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
stations List
@parent
@stop

{{-- Page content --}}
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
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Stations List
                </h4>
                <div class="pull-right">
                    <a href="{{ route('admin.stations.create') }}" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> @lang('button.create')</a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <table class="table table-bordered " id="table">
                    <thead>
                        <tr class="filters">
                            <th>ID</th>
                            <th>Code</th>
							<th>Name</th>
							<th>River_id</th>
							<th>River_level</th>
							<th>Normal_level</th>
							<th>Alert_level</th>
							<th>Warning_level</th>
							<th>Danger_level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($stations as $station)
                        <tr>
                            <td>{!! $station->id !!}</td>
                            <td>{!! $station->code !!}</td>
							<td>{!! $station->name !!}</td>
							<td>{!! $station->river_id !!}</td>
							<td>{!! $station->river_level !!}</td>
							<td>{!! $station->normal_level !!}</td>
							<td>{!! $station->alert_level !!}</td>
							<td>{!! $station->warning_level !!}</td>
							<td>{!! $station->danger_level !!}</td>
                            <td>
                                <a href="{{ route('admin.stations.show', $station->id) }}">
                                    <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view station"></i>
                                </a>
                                <a href="{{ route('admin.stations.edit', $station->id) }}">
                                    <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit station"></i>
                                </a>
                                <a href="{{ route('admin.stations.confirm-delete', $station->id) }}" data-toggle="modal" data-target="#delete_confirm">
                                    <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete station"></i>
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
