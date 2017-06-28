@extends('template')

@section('content')

    <h1 class="page-header"> {{ __('messages.places.create.page_title')}} </h1>

    <form role="form" action="{{ route('places.store') }}" enctype="multipart/form-data" method="POST">
        {{ csrf_field() }}
        <div class="form-group ">
            <label> {{ __('messages.places.general.name') }} </label>
            <input class="form-control" id="name" name="name" required="" type="text"/>
        </div>
        <div class="form-group ">
            <label> {{ __('messages.places.general.address') }} </label>
            <input class="form-control" id="address" name="address" type="text"></input>
        </div>
        <div class="form-group">
            <label > {{ __('messages.places.general.phone_number') }} </label>
            <input class="form-control" id="phone_number" name="phone_number" type="number"></input>
        </div>
        <div class="text-center">
    		<a href="{{ url()->previous() }}" class="btn btn-danger">{{ __('messages.global.cancel') }}</a>
    		<button type="submit" class="btn btn-success">{{ __('messages.global.submit') }}</button>
    	</div>
    </form>



@endsection
