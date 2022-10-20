@extends('layouts.menu_admin')

@php
	$navBarTitle	=	"Users";
	$bgBody			=	"bg-lightSoft";
@endphp

@section('content')
	<div class="mx-4" id="formRegisterUser">
        <form action="{{route('users.store')}}" method="post">
            @csrf
            <div class="flex mt-4 p-2">
                <a href="{{route('users.index')}}"><button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out"><i class="w-6 fa-solid fa-angles-left"></i> Back</button></a>
            </div>
			<div class="mt-4 flex justify-center space-x-8">
				<a href="{{route('users.create')}}">
					<button class="createUser w-32 p-2 bg-third hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Create</button>
				</a>
				<a href="{{route('users.search')}}">
					<button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Search</button>
				</a>
			</div>
			<div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
				<i class="fa-solid fa-user-plus"></i> User Register
			</div>
			<div class="text-center md:mt-8 mt-6 p-2 bg-primary items-center  rounded-full flex lg:inline-flex w-full">
				{{-- <div class="p-2 bg-primary items-center  rounded-full flex lg:inline-flex w-full"> --}}
				  <span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
				  <span class="font-semibold mr-2 text-light md:text-base sm:text-sm text-xs">In order to perform the User registration correctly, it is necessary to fill in all the fields with the requested data.</span>
				  <svg class="fill-current opacity-75 h-4 w-4  text-lightSoft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
				{{-- </div> --}}
			</div>

			<div class="mt-8 mb-2">
				<label class="font-bold text-primary xs:text-md divide-y-2 divide-solid divide-secondary"><i class="text-xl fa-solid fa-user-tie"></i> PERSONAL INFORMATION</label>
			</div>
			<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:", "attributeInput" => "name=\"name\" type=\"text\" placeholder=\"name\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Last Name:", "attributeInput" => "name=\"lastName\" type=\"text\" placeholder=\"Last Name\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Second last name", "attributeInput" => "name=\"secondLastName\" type=\"text\" placeholder=\"Second Last Name\""]) @endcomponent
			    @php
					$options = collect();
					$genderData =   ["Female","Male"];
					foreach ($genderData as $gender)
					{
						$options    =   $options->concat([["value"  =>  $gender, "content" => $gender]]);
					}
				@endphp
				@component('components.inputs.select', ["label" => "Gender", "options" => $options, "attributeSelect" => "name=\"gender\" multiple=\"multiple\"", "classSelect" => "js-gender"]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Birthday:", "attributeInput" => "name=\"birthday\" type=\"text\" placeholder=\"Birthday\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "CURP:", "attributeInput" => "name=\"curp\" type=\"text\" placeholder=\"CURP\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "RFC:", "attributeInput" => "name=\"rfc\" type=\"text\" placeholder=\"RFC\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "NSS:", "attributeInput" => "name=\"nss\" type=\"text\" placeholder=\"NSS\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Phone:", "attributeInput" => "name=\"phone\" type=\"text\" placeholder=\"Phone\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Email address:", "attributeInput" => "name=\"email\" type=\"text\" placeholder=\"Email address\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "State / Province:", "attributeInput" => "name=\"state\" type=\"text\" placeholder=\"State / Province\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Township:", "attributeInput" => "name=\"township\" type=\"text\" placeholder=\"Township\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "City:", "attributeInput" => "name=\"city\" type=\"text\" placeholder=\"City\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "ZIP / Postal code:", "attributeInput" => "name=\"zip\" type=\"text\" placeholder=\"ZIP / Postal code\""]) @endcomponent
				<div class="md:col-span-3 sm:col-span-2 col-span-1">
					<label class="text-darkSoft font-semibold">Address:</label>
					<textarea type="text" name="address" class="w-full text-third h-16 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Write your Address complete"></textarea>
				</div>
			</div>
			<div class="mt-8 mb-2">
				<label class="font-bold text-primary xs:text-md"><i class="fa-solid fa-user-plus"></i> USER CREATION</label>
			</div rounded-mdv>
			<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "User:", "attributeInput" => "name=\"user\" type=\"text\" placeholder=\"User\""]) @endcomponent
				<div>
					@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Password:", "attributeInput" => "name=\"password\" type=\"password\" placeholder=\"Password\"", "clasInput" => "password"]) @endcomponent
				</div>
				<div>
					@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Confirm Password:", "attributeInput" => "name=\"passwordConfirmation\" type=\"password\" placeholder=\"Confirm Password\"", "clasInput" => "passwordConfirm"]) @endcomponent
					<div class="validatePasswordConfirmation bg-dangerSoft bg-opacity-50 rounded-md hidden p-2 content-center"> <label class="text-third font-bold">Error: </label><label class="ml-6 text-center text-dangerDark font-semibold">Passwords don´t match</label><i class="text-dangerDark fa-solid fa-circle-exclamation h-6 ml-6"></i></div>
				</div>
			</div>
			<div class="w-full flex justify-center my-8 space-x-4">
				<button class="save w-24 h-10 bg-secondary rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
				<button class="w-24 h-10 bg-danger rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
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
		$(document).on('keyup','.password',function(){
            validPassword()
		})
		$(document).on('keyup','.passwordConfirm',function(){
            validPassword()
		});
        function validPassword()
        {
            password = $('.password').val();
			passwordConfirm = $('.passwordConfirm').val();
			if (password != "" && passwordConfirm !="")
			{
				if (passwordConfirm != password)
				{
					$('.validatePasswordConfirmation').removeClass('hidden').addClass('flex');
				}
				if (passwordConfirm == password)
				{
					$('.validatePasswordConfirmation').removeClass('flex').addClass('hidden');
				}
			}
            else
            {
                $('.validatePasswordConfirmation').removeClass('flex').addClass('hidden');
            }
        }
	</script>
@endsection


