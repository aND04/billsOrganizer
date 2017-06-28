@extends('template')

@section('content')

<h1 class="page-header"> {{ __('messages.places.index.page_title')}} </h1>

<div class="table-responsive">

    <table class="table table-striped">

        <thead>
            <tr>
                <th> {{ __('messages.places.index.id')}}            </th>
                <th> {{ __('messages.places.general.name')}}          </th>
                {{-- <th> {{ __('messages.places.general.address')}}       </th>
                <th> {{ __('messages.places.general.phone_number')}}  </th> --}}
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($places as $place)
            <tr>
                <td> {{ $place->id }}           </td>
                <td> {{ $place->name }}         </td>
                {{-- <td> {{ $place->address }}      </td>
                <td> {{ $place->phone_number }} </td> --}}
                <td class="text-center btn-width">
                    <a class="btn btn-success btn-xs" href="{{ route('places.show', $place->id) }}" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.view')}} >
                         <i class="fa fa-info fa-fw"></i>
                    </a>
                    <a class="btn btn-primary btn-xs" href="#" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.edit')}} >
                        <i class="fa fa-pencil fa-fw"></i>
                    </a>
                    <button class="btn btn-danger btn-xs" href="#" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.delete')}} >
                        <i class="fa fa-trash-o fa-fw"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>



@endsection
