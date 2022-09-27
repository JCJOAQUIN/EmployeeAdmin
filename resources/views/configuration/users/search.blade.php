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
                <a href="{{route('users.index')}}"><button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out"><i class="w-6 fa-solid fa-angles-left"></i> Back</button></a>
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
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:", "attributeInput" => "placeholder=\"Write the Name\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "User:", "attributeInput" => "placeholder=\"Write the User\""]) @endcomponent
                @php
					$options = collect();
					$genderData =   ["Female","Male"];
					foreach ($genderData as $gender)
					{
						$options    =   $options->concat([["value"  =>  $gender, "content" => $gender]]);
					}
				@endphp
				@component('components.inputs.select', ["label" => "Gender", "options" => $options, "attributeSelect" => "name=\"gender\" multiple=\"multiple\"", "classSelect" => "js-gender"]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "State:", "attributeInput" => "placeholder=\"Write the State\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "NSS:", "attributeInput" => "placeholder=\"Write the NSS\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Birthday:", "attributeInput" => "placeholder=\"Write the Birthday\""]) @endcomponent
            </div>
            <div class="text-center">
                <button class="search mt-8 w-24 h-10 bg-teal-500 hover:bg-teal-600 hover:text-light rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-search"></i> Search</button>
            </div>
            <div class="bg-thirdSoft md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:p-8 p-2">
                <div class="grid grid-cols-12 text-center p-2 bg-teal-800 text-lightSoft rounded-md mb-2">
                    <div class="col-span-1">#</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">Name</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">Type</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft">
                    <div class="col-span-1">1</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">José Carlos Joaquín Vazquez</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">Administrator</div>
                    <div class="col-span-1">Male</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft">
                    <div class="col-span-1">2</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">José Carlos Joaquín Vazquez</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">HHRR</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft">
                    <div class="col-span-1">3</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">José Carlos Joaquín Vazquez</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">Type</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft">
                    <div class="col-span-1">4</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">José Carlos Joaquín Vazquez</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">Type</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
                <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft">
                    <div class="col-span-1">5</div>
                    <div class="col-span-1">Key</div>
                    <div class="col-span-3">José Carlos Joaquín Vazquez</div>
                    <div class="col-span-1">User</div>
                    <div class="col-span-1">Type</div>
                    <div class="col-span-1">Gender</div>
                    <div class="col-span-1">State</div>
                    <div class="col-span-1">NSS</div>
                    <div class="col-span-1">Birthday</div>
                    <div class="col-span-1">Action</div>
                </div>
            </div>
        </form>


	</div>
@endsection
@section('scripts')
	<script type="text/javascript">
		$(document).ready(function()
		{
            $('.js-gender').select2({
				placeholder         :   "Select a Gender",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			});
		});
	</script>
@endsection

