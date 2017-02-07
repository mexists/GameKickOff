@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
river
@parent
@stop

@section('content')
<section class="content-header">
    <h1>Rivers</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>rivers</li>
        <li class="active">rivers</li>
    </ol>
</section>

<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title"> <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    river {{ $river->id }}'s details
                </h4>
            </div>
            <br />
            <div class="panel-body">
                <table class="table">
                    <tr><td>id</td><td>{{ $river->id }}</td></tr>
                     <tr><td>name</td><td>{{ $river['name'] }}</td></tr>
					<tr><td>district_id</td><td>{{ $river['district_id'] }}</td></tr>
					<tr><td>state_id</td><td>{{ $river['state_id'] }}</td></tr>
					<tr><td>country_id</td><td>{{ $river['country_id'] }}</td></tr>
					
                </table>
            </div>
        </div>
    </div>
</div>
@stop