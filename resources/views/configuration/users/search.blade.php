@extends('layouts.menu_admin')

@php
	$navBarTitle	=	"Users";
	$bgBody			=	"bg-lightSoft";
@endphp

@section('content')
	<div class="mx-4" id="formRegisterUser">
        <form>
            @csrf
            <div class="flex mt-4 p-2">
                <a href="{{route('users.index')}}">
                    <button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out">
                        <i class="w-6 fa-solid fa-angles-left"></i> Back
                    </button>
                </a>
            </div>
			<div class="mt-4 flex justify-center space-x-8">
				<a href="{{route('users.create')}}">
					<button class="createUser w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Create</button>
				</a>
				<a href="{{route('users.search')}}">
					<button class="w-32 p-2 bg-third hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Search</button>
				</a>
			</div>
			<div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
				<i class="fa-solid fa-users-viewfinder"></i> Search User
			</div>
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-8 mt-8">
                @php
                    $userSearch =   isset($user) ? $user : "";
                    $nameSearch =   isset($name) ? $name : "";
                    $genderSearch =   isset($gender) ? $gender : "";
                    $stateSearch =   isset($state) ? $state : "";
                    $nssSearch =   isset($nss) ? $nss : "";
                    $typeSearch =   isset($type) ? $type : "";
                @endphp
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "User:", "attributeInput" => "name=\"user\" placeholder=\"Write the User\" value=\"".$userSearch."\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:", "attributeInput" => "name=\"name\" placeholder=\"Write the Name\" value=\"".$nameSearch."\""]) @endcomponent
                @php
					$options = collect();
					$genderData =   ["Female","Male"];
					foreach ($genderData as $gender)
					{
                        if ($gender==$genderSearch)
                        {
                            $options    =   $options->concat([["value" => $gender, "content" => $gender, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value"  =>  $gender, "content" => $gender]]);
                        }
					}
				@endphp
				@component('components.inputs.select', ["label" => "Gender", "options" => $options, "attributeSelect" => "name=\"gender\" multiple=\"multiple\"", "classSelect" => "js-gender"]) @endcomponent
                {{$status}}
                @php
					$options = collect();
					$statusData =   ["1"=>"Suspended","2"=>"Active"];
					foreach ($statusData as $k=>$statuses)
					{
                        if ($status==$k)
                        {
                            $options    =   $options->concat([["value" => $k, "content" => $statuses, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value"  =>  $k, "content" =>$statuses]]);
                        }
					}
				@endphp
				@component('components.inputs.select', ["label" => "Status", "options" => $options, "attributeSelect" => "name=\"status\" multiple=\"multiple\"", "classSelect" => "js-status"]) @endcomponent

                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "State:", "attributeInput" => "name=\"state\" placeholder=\"Write the State\" value=\"".$stateSearch."\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "NSS:", "attributeInput" => "name=\"nss\" placeholder=\"Write the NSS\" value=\"".$nssSearch."\""]) @endcomponent
                @php
                    $options    =   collect();
                    $kindUserData =   ["0"=>"Administrator","1"=>"Employee"];
                    foreach ($kindUserData as $k=>$kindUser)
                    {
                        if (isset($type) && $type == $k)
                        {
                            $options    =   $options->concat([["value"  =>  $k, "content" => $kindUser, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value"  =>  $k, "content" => $kindUser]]);
                        }
                    }
                @endphp
				@component('components.inputs.select', ["label" => "Kind User:", "options" => $options, "attributeSelect" => "name=\"type\" multiple=\"multiple\"", "classSelect" => "js-kindUser"]) @endcomponent
            </div>
            <div class="text-center">
                <button class="search mt-8 w-24 h-10 bg-teal-500 hover:bg-teal-600 hover:text-light rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-search"></i> Search</button>
            </div>
            <div class="bg-thirdSoft lg:text-sm text-xs md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:p-8 p-2 md:block hidden">
                <div class="grid grid-cols-12 text-center p-2 bg-teal-800 text-lightSoft rounded-md mb-2">
                    <div class="col-span-1">ID</div>
                    <div class="col-span-1">User</div>
                    <div class="md:col-span-3">Name</div>
                    <div class="col-span-2">Kind User</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-2">NSS</div>
                    <div class="col-span-1">Actions</div>
                </div>
                @foreach ($requests as $request)
                    <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft userRow">
                        <div class="col-span-1 grid place-items-center"> {{isset($request->id) ? $request->id : "---"}} </div>
                        <div class="col-span-1 grid place-items-center"> {{isset($request->user) ? $request->user : "---"}} </div>
                        <div class="col-span-3 grid place-items-center"> {{isset($request->name) ? $request->fullName() : "---"}} </div>
                        <div class="col-span-2 grid place-items-center">
                            {{isset($request->user_kind) && $request->user_kind=='0' ? 'Administrator' : 'Employee'}}
                        </div>
                        <div class="col-span-1 grid place-items-center"> {{isset($request->gender) ? $request->gender : "---"}} </div>
                        <div class="col-span-1 grid place-items-center rounded-md text-white {{($request->deleted_at !="") ? 'bg-red-500' : "bg-green-600"}}">
                            {{$request->deleted_at !="" ? "Suspended" : "Active"}}
                        </div>
                        <div class="col-span-2 grid place-items-center"> {{isset($request->nss) ? $request->nss : "---"}} </div>
                        <div class="col-span-1 space-x-2">
                            <a href="{{route('users.view',$request->id)}}">
                                <button type="button" title="View User information"><i class="text-base py-1 fa-solid fa-address-card text-third hover:text-thirdSoft"></i></button>
                            </a>
                            @if ($request->deleted_at =="")
                                <a href="{{route('users.edit',$request->id)}}">
                                    <button type="button" title="Edit User"><i class="text-base py-1 fa-solid fa-user-pen text-primary hover:text-primarySoft"></i></button>
                                </a>
                            @endif
                           <a href="{{route('users.suspend',$request->id)}}">
                                <button class="disableUser {{ $request->deleted_at !="" ? 'hidden' : "" }}" title="Suspend User" type="button"><i class="text-base py-1 fa-solid fa-user-slash text-dangerDark hover:text-dangerSoft"></i></button>
                            </a>
                            <a href="{{route('users.active',$request->id)}}">
                                <button class="enableUser {{ $request->deleted_at =="" ? 'hidden' : "" }}" title="Active User" type="button"><i class="text-base py-1 fa-solid fa-user-check text-secondaryDark hover:text-secondarySoft"></i></button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bg-thirdSoft md:mt-8 mt-6 rounded-md bg-opacity-10 text-sm md:p-8 p-2 md:hidden block">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-3">
                    @foreach ($requests as $request)
                        <div class="bg-white p-4 rounded-md">
                            <div class="w-full text-center border-b-2 border-gray-500 mb-4 pb-2">
                                @component('components.labels.label', ["label" => isset($request->name) ? $request->fullName() : "---", "classLabel" => "font-bold"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "ID:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->id) ? $request->id : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "User:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->user) ? $request->user : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Kind User:", "classLabel" => "font-bold"]) @endcomponent
                                @php
                                $userKind   =   "Employee";
                                    if (isset($request->user_kind) && $request->user_kind=='0')
                                    {
                                        $userKind   =   "Administrator";
                                    }
                                @endphp
                                @component('components.labels.label', ["label" => $userKind]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Gender:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->gender) ? $request->gender : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Status:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => $request->deleted_at !="" ? "Suspended" : "Active"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "NSS:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->nss) ? $request->nss : "---"]) @endcomponent
                            </div>
                            <div class="w-full text-center border-t-2 border-gray-500 mb-4 pt-4 space-x-4 userRow">
                                <a href="{{route('users.view',$request->id)}}"><button type="button" title="View User information"><i class="text-lg fa-solid fa-address-card text-third hover:text-thirdSoft"></i></button></a>
                                @if ($request->deleted_at =="")
                                    <a href="{{route('users.edit',$request->id)}}"><button type="button" title="Edit User"><i class="text-lg fa-solid fa-user-pen text-primary hover:text-primarySoft"></i></button></a>
                                @endif
                               <a href="{{route('users.suspend',$request->id)}}">
                                    <button class="disableUserSM {{ $request->deleted_at !="" ? 'hidden' : "" }}"  title="Suspend User" type="button"><i class="text-lg fa-solid fa-user-slash text-dangerDark hover:text-dangerSoft"></i></button>
                                </a>
                               <a href="{{route('users.active',$request->id)}}">
                                    <button class="enableUserSM {{ $request->deleted_at =="" ? 'hidden' : "" }}" title="Active User" type="button"><i class="text-lg fa-solid fa-user-check text-secondaryDark hover:text-secondarySoft"></i></button>
                                </a>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                {{$requests->links()}}
            </div>
        </form>
	</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
            $('.js-gender').select2({
				placeholder         :   "Select a Gender",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
            $('.js-kindUser').select2({
				placeholder         :   "Select a Kind User",
				language            :   "en",
				maximumSelectionLength  : 1,
                minimumInputLength      : 2,
				width               : "100%"
			})
            $('.js-status').select2({
				placeholder         :   "Select an Status",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
            // $(document).on('click','.disableUser',function()
            // {
            //     $(this).addClass('hidden');
            //     $(this).parents('.userRow').find('.enableUser').removeClass('hidden');
            // })
            // .on('click','.enableUser',function()
            // {
            //     $(this).addClass('hidden');
            //     $(this).parents('.userRow').find('.disableUser').removeClass('hidden');
            // })
            // .on('click','.disableUserSM',function()
            // {
            //     $(this).addClass('hidden');
            //     $(this).parents('.userRow').find('.enableUserSM').removeClass('hidden');
            // })
            // .on('click','.enableUserSM',function()
            // {
            //     $(this).addClass('hidden');
            //     $(this).parents('.userRow').find('.disableUserSM').removeClass('hidden');
            // })
		});
        @if (isset($alert))
            {{$alert}}
        @else
            swal.fire({
                imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                showConfirmButton: false,
                timer: 800,
            });
        @endif
	</script>
@endsection


