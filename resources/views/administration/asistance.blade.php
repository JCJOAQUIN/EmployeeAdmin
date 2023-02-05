@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Asistances";
@endphp
@section('content')
    <div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
        <i class="fa-solid fa-table-list"></i> General Asistance List
    </div>
    <form>
        @csrf
        <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-8 mt-8">
            <div class="md:col-span-3 sm:col-span-2 col-span-1 text-xl text-third font-bold mb-4">
                Filters <i class="fa-solid fa-filter"></i>
            </div>
            @php
                $options = collect();
                $userData   =   App\Models\User::get();
                foreach ($userData as $users)
                {
                    if (isset($userSearch) && $userSearch !="" && $userSearch == $users->id)
                    {
                        $options    =   $options->concat([["value" => $users->id, "content" => $users->name, "selected" => "selected"]]);
                    }
                    else
                    {
                        $options    =   $options->concat([["value"  =>  $users->id, "content" => $users->name]]);
                    }
                }
            @endphp
            @component('components.inputs.select', ["label" => "Employee: ", "options" => $options, "attributeSelect" => "name=\"user\" multiple=\"multiple\"", "classSelect" => "js-user"]) @endcomponent
            @php
                $options = collect();
                $userData   =   App\Models\Cat_times::get();
                foreach ($userData as $users)
                {
                    if (isset($userSearch) && $userSearch !="" && $userSearch == $users->id)
                    {
                        $options    =   $options->concat([["value" => $users->id, "content" => $users->name, "selected" => "selected"]]);
                    }
                    else
                    {
                        $options    =   $options->concat([["value"  =>  $users->id, "content" => $users->name]]);
                    }
                }
            @endphp
            @component('components.inputs.select', ["label" => "Timeliness: ", "options" => $options, "attributeSelect" => "name=\"timeliness\" multiple=\"multiple\"", "classSelect" => "js-timeliness"]) @endcomponent

            @php
                $options = collect();
                $assistanceData   =   ["1"=>"In","2"=>"Out"];
                foreach ($assistanceData as $k=>$assistance)
                {
                    if (isset($assistanceSearch) && $assistanceSearch !="" && $assistanceSearch == $k)
                    {
                        $options    =   $options->concat([["value"  =>  $k, "content" => $assistance, "selected" => "selected"]]);
                    }
                    else
                    {
                        $options    =   $options->concat([["value"  =>  $k, "content" => $assistance]]);
                    }
                }
            @endphp
            @component('components.inputs.select', ["label" => "Assistance type: ", "options" => $options, "attributeSelect" => "name=\"assistanceType\" multiple=\"multiple\"", "classSelect" => "js-assistanceType"]) @endcomponent
        </div>
    </form>
    <div class="text-center">
        <button class="search mt-8 w-24 h-10 bg-teal-500 hover:bg-teal-600 hover:text-light rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-search"></i> Search</button>
    </div>

	<div class="bg-thirdSoft lg:text-sm text-xs md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:p-8 p-2 md:block hidden">

        {{-- ? table medium size --}}

        <div class="grid grid-cols-12 text-center p-2 bg-teal-800 text-lightSoft rounded-md mb-2">
            <div class="col-span-1">ID</div>
            <div class="md:col-span-4">Name</div>
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

        {{-- pagination --}}
    <div class="text-center mt-4">
        {{$requests->links()}}
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
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
