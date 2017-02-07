@extends('emails/layouts/default')

@section('content')
<p>Hello {!! $user->first_name !!},</p>

<p>Welcome to {{config('custom.application.name')}}! Please click on the following link to confirm your {{config('custom.application.shortName')}} account:</p>

<p><a href="{!! $activationUrl !!}">{!! $activationUrl !!}</a></p>

<p>Best regards,</p>

<p>@lang('general.site_name') Team</p>
@stop
