@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.appointments.create.page_title')}} </h1>
    
    <form role="form" action="{{ route('appointments.store') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group ">
            <label> {{ __('messages.appointments.general.patient_name') }} </label>
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
            <label> {{ __('messages.appointments.general.description') }} </label>
            <textarea class="form-control" id="observations" name="observations" type="text" rows="3"></textarea>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.appointments.general.date') }} </label>
            <input class="form-control" id="date" name="date" required="" type="date"/>
        </div>
        <div class="form-group">
            <label > {{ __('messages.appointments.general.local') }} </label>
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
