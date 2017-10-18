@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.surgeries.show.page_title') }} </h1>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.patient_name') }}</label>
        <p class="form-control-static"> {{ $surgery->patient->name }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.date') }}</label>
        <p class="form-control-static"> {{ $surgery->surgery_date }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.type') }}</label>
        <p class="form-control-static"> {{ $surgery->type }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.code') }}</label>
        <p class="form-control-static"> {{ $surgery->code }} </p>
    </div>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.complications') }}</label>
        @if($surgery->observations)
        <p class="form-control-static"> {{ $surgery->complications }} </p>
        @else
        <p class="form-control-static"> - </p>
        @endif
    </div>

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.anesthetic') }}</label>
        @if($surgery->anesthetic)
        <p class="form-control-static"> {{ __('messages.global.yes') }} </p>
        @else
        <p class="form-control-static"> {{ __('messages.global.no') }} </p>
        @endif
    </div>

    @if($surgery->image)
    <div class="form-group ">
        <label>{{ __('messages.surgeries.show.image') }}</label>
        <div class="fileupload-new thumbnail" style="max-width: 330px;height: auto;">
            <img src="{{ Storage::url($surgery->image)}}" alt="" >
        </div>
    </div>
    @endif

    <div class="form-group ">
        <label>{{ __('messages.surgeries.general.place') }}</label>
        <p class="form-control-static"> {{ $surgery->place->name }} </p>
    </div>

    <div class="text-center col-sm-12">
    	<a href="{{ url()->previous() }}" class="btn btn-default">{{ __('messages.global.return') }}</a>
    </div>

@endsection
