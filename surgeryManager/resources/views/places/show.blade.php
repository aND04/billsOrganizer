@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.places.show.page_title') }} </h1>

    <div class="form-group ">
        <label>{{ __('messages.places.general.name') }}</label>
        <p class="form-control-static"> {{ $place->name }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.places.general.address') }}</label>
        <p class="form-control-static"> {{ $place->address }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.places.general.phone_number') }}</label>
        <p class="form-control-static"> {{ $place->phone_number }} </p>
    </div>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
