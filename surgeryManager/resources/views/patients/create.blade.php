@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.patients.create.page_title')}} </h1>

    <form role="form" action="{{ route('patients.store') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group ">
            <label> {{ __('messages.patients.general.patient_name') }} </label>
            <input class="form-control" id="name" name="name" required="" type="text"/>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.patients.general.birthday') }} </label>
            <input class="form-control" id="birthdate" name="birthdate" required="" type="date"/>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.patients.general.residency') }} </label>
            <input class="form-control" id="residency" name="residency" required="" type="text"/>
        </div>
        <div class="form-group">
            <label > {{ __('messages.patients.general.phone_number') }} </label>
            <input class="form-control" id="phone_number" name="phone_number" type="number"></input>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.patients.general.email') }} </label>
            <input class="form-control" id="email" name="email" required="" type="text"/>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.patients.general.nationality') }} </label>
            <input class="form-control" id="nationality" name="nationality" required="" type="text"/>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.patients.general.profession') }} </label>
            <input class="form-control" id="profession" name="profession" required="" type="text"/>
        </div>
        <div class="text-center">
    		<a href="{{ url()->previous() }}" class="btn btn-danger">{{ __('messages.global.cancel') }}</a>
    		<button type="submit" class="btn btn-success">{{ __('messages.global.submit') }}</button>
    	</div>
    </form>

@endsection
