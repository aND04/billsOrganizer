@extends('template')

@section('content')

<h1 class="page-header"> {{ __('messages.surgeries.index.page_title')}} </h1>

<div class="table-responsive">

    <table class="table table-striped">

        <thead>
            <tr>
                <th> {{ __('messages.surgeries.index.id')}}              </th>
                <th> {{ __('messages.surgeries.general.date')}}          </th>
                <th> {{ __('messages.surgeries.general.patient_name')}}  </th>
                <th> {{ __('messages.surgeries.general.place')}}         </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($surgeries as $surgery)
            <tr>
                <td> {{ $surgery->id }}                                         </td>
                <td> {{ date('d-m-Y', strtotime($surgery->surgery_date)) }}     </td>
                <td> {{ $surgery->patient->name }}                              </td>
                <td> {{ $surgery->place->name }}                                </td>
                <td class="text-center btn-width">
                    <a class="btn btn-success btn-xs" href="{{ route('surgeries.show', $surgery->id) }}" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.view')}} >
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
