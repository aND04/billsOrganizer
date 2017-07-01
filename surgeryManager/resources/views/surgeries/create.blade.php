@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.surgeries.create.page_title')}} </h1>

    <form role="form" action="{{ route('surgeries.store') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group ">
            <label> {{ __('messages.surgeries.general.patient_name') }} </label>
            <select class="form-control" id="name" name="name">
                @foreach ($patients as $patient)
                    <option></option>
                    <option>
                        {{ $patient->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.surgeries.general.date') }} </label>
            <input class="form-control" id="surgery_date" name="surgery_date" required="" type="date"/>
        </div>
        <div class="form-group">
            <label> {{ __('messages.surgeries.general.type') }} </label>
            <input class="form-control" id="type" name="type" type="text"></input>
        </div>
        <div class="form-group">
            <label> {{ __('messages.surgeries.general.code') }} </label>
            <input class="form-control" id="code" name="code" type="text"></input>
        </div>
        <div class="form-group">
            <label> {{ __('messages.surgeries.general.complications') }} </label>
            <textarea class="form-control" id="complications" name="complications" type="text" rows="3"></textarea>
        </div>
        <div class="form-group">
            <input type="checkbox" id="anesthetic" name="anesthetic"> <label>&nbsp; {{ __('messages.surgeries.general.anesthetic') }}</label></input>
        </div>
        <div class="form-group">
            <label> {{ __('messages.surgeries.general.image') }} </label>
            <input type="file" id="image" name="image"></input>
        </div>
        <div class="form-group">
            <label > {{ __('messages.surgeries.general.local') }} </label>
            <select class="form-control" id="place" name="place">
                @foreach ($places as $place)
                    <option></option>
                    <option>
                        {{ $place->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="text-center">
    		<a href="{{ url()->previous() }}" class="btn btn-danger">{{ __('messages.global.cancel') }}</a>
    		<button type="submit" class="btn btn-success">{{ __('messages.global.submit') }}</button>
    	</div>
    </form>

@endsection
