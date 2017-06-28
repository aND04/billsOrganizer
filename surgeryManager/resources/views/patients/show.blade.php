@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.patients.show.page_title') }} </h1>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.patient_name') }} </label>
        <p class="form-control-static"> {{ $patient->name }} </p>
    </div>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.birthday') }} </label>
        <p class="form-control-static"> {{ $patient->birthday }} </p>
    </div>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.residency') }} </label>
        <p class="form-control-static"> {{ $patient->residency }}  </p>
    </div>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.email') }} </label>
        <p class="form-control-static"> {{ $patient->email }}  </p>
    </div>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.nationality') }} </label>
        <p class="form-control-static"> {{ $patient->nationality }}  </p>
    </div>

    <div class="form-group ">
        <label> {{ __('messages.patients.general.profession') }} </label>
        <p class="form-control-static"> {{ $patient->profession }}  </p>
    </div>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
