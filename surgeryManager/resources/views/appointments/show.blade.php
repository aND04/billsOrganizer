@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.appointments.show.page_title') }} </h1>

    <div class="form-group ">
        <label>{{ __('messages.appointments.general.patient_name') }}</label>
        <p class="form-control-static"> {{ $appointment->patient->name }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.appointments.general.description') }}</label>
        @if($appointment->observations)
        <p class="form-control-static"> {{ $appointment->observations }} </p>
        @else
        <p class="form-control-static"> - </p>
        @endif
    </div>

    <div class="form-group ">
        <label>{{ __('messages.appointments.general.date') }}</label>
        <p class="form-control-static"> {{ $appointment->appointment_date }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.appointments.general.place') }}</label>
        <p class="form-control-static"> {{ $appointment->place->name }} </p>
    </div>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
