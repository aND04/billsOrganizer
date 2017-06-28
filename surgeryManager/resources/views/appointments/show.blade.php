@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.appointments.show.page_title') }} </h1>

    <label class="col-sm-3">{{ __('messages.appointments.general.patient_name') }}</label>
    {{-- <p class="col-sm-10 form-control-static"> {{ $appointment->name }} </p> --}}
    <p class="col-sm-9 form-control-static"> TODO </p>

    <label class="col-sm-3">{{ __('messages.appointments.general.description') }}</label>
    <p class="col-sm-9 form-control-static"> {{ $appointment->observations }} </p>

    <label class="col-sm-3">{{ __('messages.appointments.general.date') }}</label>
    <p class="col-sm-9 form-control-static"> {{ $appointment->appointment_date }} </p>

    <label class="col-sm-3">{{ __('messages.appointments.general.place') }}</label>
    <p class="col-sm-9 form-control-static"> {{ $appointment->place->name }} </p>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
