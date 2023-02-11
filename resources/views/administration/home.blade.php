@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Home";
@endphp
@section('content')


    <div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
        <i class="fa-solid fa-calendar-day"></i> Today Asistance List
    </div>
    <div class="text-center md:mt-8 mt-6 p-2 bg-primary items-center  rounded-full flex lg:inline-flex w-full">
        <span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
        <span class="font-semibold mr-2 text-left text-light md:text-base sm:text-sm text-xs">Only the last 10 assistances are listed.</span>
    </div>
	<div class="bg-thirdSoft lg:text-sm text-xs md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:p-8 p-2 md:block hidden">

        {{-- ? table medium size --}}

        <div class="grid grid-cols-12 text-center p-2 bg-teal-800 text-lightSoft rounded-md mb-2">
            <div class="col-span-1">ID</div>
            <div class="col-span-4">Name</div>
            <div class="col-span-3">Check In</div>
            <div class="col-span-3">Check Out</div>
            <div class="col-span-1">Timeliness</div>
        </div>
        @if (isset($requests))
            @foreach ($requests as $request)
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft employeeRow">
                    <div class="col-span-1  grid place-items-center">{{$request->id}}</div>
                    <div class="col-span-4  grid place-items-center">{{$request->user != null ? $request->user->fullName() : "---"}}</div>
                    <div class="col-span-3  grid place-items-center">{{isset($request->check_in) ? $request->check_in : "---"}}</div>
                    <div class="col-span-3  grid place-items-center">{{isset($request->check_out) ? $request->check_out : "---"}}</div>
                    <div class="col-span-1  grid place-items-center">
                        <div class="flex w-full justify-between">
                            @php
                                $timeleninessColor =
                                [
                                    '1'=>'text-secondary',
                                    '2'=>'text-danger',
                                    '3'=>'text-dangerSoft',
                                    '4'=>'text-thirdSoft',
                                    '5'=>'text-darkSoft',
                                ];
                                foreach ($timeleninessColor as $key => $color)
                                {
                                    if ($request->timeliness_id == $key)
                                    {
                                        $colorIcon = $color;
                                    }
                                }
                            @endphp
                            <span>{{$request->timeliness->name}}</span> <i class="fa-solid fa-user-clock {{$colorIcon}}"></i>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
	</div>

    {{-- ? table movile size --}}

    <div class="bg-thirdSoft md:mt-8 mt-6 rounded-md bg-opacity-10 text-sm md:p-8 p-2 md:hidden block">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-3">
            @if (isset($requests))
                @foreach ($requests as $request)
                    <div class="bg-white p-4 rounded-md">
                        <div class="w-full text-center border-b-2 border-gray-500 mb-4 pb-2">
                            @component('components.labels.label', ["label" => $request->user != null ? $request->user->fullName() : "---", "classLabel" => "font-bold"]) @endcomponent
                        </div>
                        <div class="grid grid-cols-2">
                            @component('components.labels.label', ["label" => "ID :", "classLabel" => "font-bold"]) @endcomponent
                            @component('components.labels.label', ["label" => $request->id]) @endcomponent
                        </div>
                        <div class="grid grid-cols-2">
                            @component('components.labels.label', ["label" => "Timeliness:", "classLabel" => "font-bold"]) @endcomponent
                            @component('components.labels.label')
                            <div class="flex w-full justify-between">
                                @php
                                    $tileninessColor =
                                    [
                                        '1'=>'text-secondary',
                                        '2'=>'text-danger',
                                        '3'=>'text-dangerSoft',
                                        '4'=>'text-thirdSoft',
                                        '5'=>'text-darkSoft',
                                    ];
                                    foreach ($tileninessColor as $key => $color)
                                    {
                                        if ($request->timeliness_id == $key)
                                        {
                                            $colorIcon = $color;
                                        }
                                    }
                                @endphp
                                <span>{{$request->timeliness->name}}</span> <i class="fa-solid fa-user-clock {{$colorIcon}}"></i>
                            </div>
                            @endcomponent
                        </div>
                        <div class="grid grid-cols-2">
                            @component('components.labels.label', ["label" => "Check In:", "classLabel" => "font-bold"]) @endcomponent
                            @component('components.labels.label', ["label" => isset($request->check_in) ? $request->check_in : "---"]) @endcomponent
                        </div>
                        <div class="grid grid-cols-2">
                            @component('components.labels.label', ["label" => "Check Out:", "classLabel" => "font-bold"]) @endcomponent
                            @component('components.labels.label', ["label" => $request->check_out != "" ? $request->check_out : "---"]) @endcomponent
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script> --}}
    <script type="text/javascript">
        swal.fire({
            imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
            showConfirmButton: false,
            timer: 800,
        });
        $(document).ready(function()
        {
            $('.js-user').select2({
				placeholder         :   "Select an User",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
            $('.js-timeliness').select2({
				placeholder         :   "Select a Timeliness",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
            $('.js-assistanceType').select2({
				placeholder         :   "Select an Assistance Type",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
        });
    </script>
@endsection
