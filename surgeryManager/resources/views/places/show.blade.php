@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.places.show.page_title') }} </h1>

    <label class="col-sm-2">{{ __('messages.places.general.name') }}</label>
    <p class="col-sm-10 form-control-static"> {{ $place->name }} </p>

    <label class="col-sm-2">{{ __('messages.places.general.address') }}</label>
    <p class="col-sm-10 form-control-static"> {{ $place->address }} </p>

    <label class="col-sm-2">{{ __('messages.places.general.phone_number') }}</label>
    <p class="col-sm-10 form-control-static"> {{ $place->phone_number }} </p>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
