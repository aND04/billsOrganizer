@extends('template')

@section('content')

<h1 class="page-header"> {{ __('messages.patients.index.page_title')}} </h1>

<div class="table-responsive">

    <table class="table table-striped">

        <thead>
            <tr>
                <th> {{ __('messages.patients.index.id')}}               </th>
                <th> {{ __('messages.patients.general.name')}}           </th>
                <th> {{ __('messages.patients.index.last_appointment')}} </th>
                <th> {{ __('messages.patients.index.last_surgery')}}     </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td> {{ $patient->id }}         </td>
                <td> {{ $patient->name }}       </td>
                <td> TODO </td>
                <td> TODO        </td>
                <td class="text-center btn-width">
                    <a class="btn btn-success btn-xs" href="{{ route('patients.show', $patient->id) }}" data-toggle="tooltip" data-placement="top" title={{ __('messages.global.view')}} >
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
