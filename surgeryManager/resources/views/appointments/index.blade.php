@extends('template')

@section('content')

<h1 class="page-header"> {{ __('messages.appointments.index.page_title')}} </h1>

<div class="table-responsive">

    <table class="table table-striped">

        <thead>
            <tr>
                <th> {{ __('messages.appointments.index.id')}}              </th>
                <th> {{ __('messages.appointments.general.date')}}          </th>
                <th> {{ __('messages.appointments.general.patient_name')}}  </th>
                <th> {{ __('messages.appointments.general.place')}}         </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <td> {{ $appointment->id }}                                         </td>
                <td> {{ date('d-m-Y', strtotime($appointment->appointment_date)) }} </td>
                <td> {{ $appointment->patient->name }}                              </td>
                <td> {{ $appointment->place->name }}                                </td>
                <td class="text-center btn-width">
                    <a class="btn btn-success btn-xs" href="{{ route('appointments.show', $appointment->id) }}" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.view')}} >
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
