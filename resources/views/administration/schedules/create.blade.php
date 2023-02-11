@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Schedules";
@endphp

@section('content')
    <div id="formCreateSchedule">
        @if (isset($requests))
            <form action="{{route('schedules.update',$requests->id)}}" method="POST">
                @method('PUT')
        @else
            <form action="{{route('schedules.store')}}" method="POST">
        @endif
            @csrf
            <div class="flex mt-4 p-2">
                <a href="{{route('schedules.index')}}"><button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out"><i class="w-6 fa-solid fa-angles-left"></i> Back</button></a>
            </div>
            <div class="mt-4 flex justify-center space-x-8">
                <a href="{{route('schedules.create')}}">
                    <button class="w-32 p-2 bg-third hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold" type="button">Create</button>
                </a>
                <a href="{{route('schedules.assign')}}">
                    <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold" type="button">Assign</button>
                </a>
            </div>
            <div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
                @if (isset($requests))
                    <i class="fa-solid fa-calendar-pen"></i> Schedules edition
                @else
                    <i class="fa-solid fa-calendar-plus"></i> Schedules creation
                @endif
            </div>
            <div class="text-center md:mt-8 mt-6 p-2 bg-primary items-center  rounded-full flex lg:inline-flex w-full">
                <span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
                <span class="font-semibold mr-2 text-left text-light md:text-base sm:text-sm text-xs">In order to perform the employee registration correctly, it is necessary to fill in all the fields with the requested data.</span>
                <svg class="fill-current opacity-75 h-4 w-4  text-lightSoft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
            </div>
            <div class="mt-8 mb-2">
                <label class="font-bold text-primary xs:text-md divide-y-2 divide-solid divide-secondary"><i class="text-xl fa-solid fa-calendar"></i> SCHEDULE INFORMATION</label>
            </div>
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
			    @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:",  "attributeInput" => "name=\"name\" type=\"text\" placeholder=\"Name\" id=\"name\""]) @endcomponent
			    {{-- @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Start date:",  "attributeInput" => "name=\"startDate\" type=\"date\" placeholder=\"Start date\" id=\"startDate\""]) @endcomponent --}}
			    {{-- @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "End date:",  "attributeInput" => "name=\"endDate\" type=\"date\" placeholder=\"End date\" id=\"endDate\""]) @endcomponent --}}
			    @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Start time:",  "attributeInput" => "name=\"startTime\" type=\"time\" placeholder=\"Start time\" id=\"startTime\""]) @endcomponent
			    @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "End time:",  "attributeInput" => "name=\"endTime\" type=\"time\" placeholder=\"End time\" id=\"endTime\""]) @endcomponent
            </div>
            <div class="w-full flex justify-center my-8 space-x-4">
                <button class="save w-24 h-10 bg-secondary hover:bg-secondarySoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
                <button class="w-24 h-10 bg-danger hover:bg-dangerSoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    @if (!session('alert'))
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script>
            swal.fire({
                imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                showConfirmButton: false,
                timer: 600,
            });
        </script>
    @endif
    <script type="text/javascript">
        $(document).ready(function()
        {
        });
    </script>
@endsection
