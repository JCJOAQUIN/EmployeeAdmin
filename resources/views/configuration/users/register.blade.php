@extends('layouts.menu_admin')

@php
	$navBarTitle	=	"Users";
	$bgBody			=	"bg-lightSoft";
@endphp

@section('content')
	<div class="mx-4" id="formRegisterUser">
		@if (isset($requests))
			<form action="{{route('users.update',$requests->id)}}" method="POST">
				@method('PUT')
		@else
			<form action="{{route('users.store')}}" method="POST">
		@endif
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
				<span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
				<span class="font-semibold mr-2 text-light md:text-base sm:text-sm text-xs">In order to perform the User registration correctly, it is necessary to fill in all the fields with the requested data.</span>
				<svg class="fill-current opacity-75 h-4 w-4  text-lightSoft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
			</div>
			<div class="mt-8 mb-2">
				<label class="font-bold text-primary xs:text-md divide-y-2 divide-solid divide-secondary"><i class="text-xl fa-solid fa-user-tie"></i> PERSONAL INFORMATION</label>
			</div>
			<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				@php
					$name               =   $requests->name ?? "";
					$lastName           =   $requests->last_name ?? "";
					$second_last_name   =   $requests->second_last_name ?? "";
					$birthday           =   $requests->birthday ?? "";
					$curp               =   $requests->curp ?? "";
					$rfc                =   $requests->rfc ?? "";
					$nss                =   $requests->nss ?? "";
					$phone              =   $requests->phone ?? "";
					$state              =   $requests->state ?? "";
					$township           =   $requests->township ?? "";
					$city               =   $requests->city ?? "";
					$address            =   $requests->address ?? "";
					$postal_code        =   $requests->postal_code ?? "";
					$email              =   $requests->email ?? "";
					$user               =   $requests->user ?? "";
					$password           =   $requests->password ?? "";
				@endphp
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:", "attributeInput" => "name=\"name\" type=\"text\" placeholder=\"Write the Name\" value=\"".$name."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Last Name:", "attributeInput" => "name=\"lastName\" type=\"text\" placeholder=\"Write the Last Name\" value=\"".$lastName."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Second last name", "attributeInput" => "name=\"secondLastName\" type=\"text\" placeholder=\"Write the Second Last Name\" value=\"".$second_last_name."\""]) @endcomponent
				@php
					$options = collect();
					$genderData =   ["Female","Male"];
					foreach ($genderData as $gender)
					{
						if (isset($requests->gender) && $requests->gender == $gender)
						{
							$options    =   $options->concat([["value" => $gender, "content" => $gender, "selected" => "selected"]]);
						}
						else
						{
							$options    =   $options->concat([["value" => $gender, "content" => $gender]]);
						}
					}
				@endphp
				@component('components.inputs.select', ["label" => "Gender", "options" => $options, "attributeSelect" => "name=\"gender\" multiple=\"multiple\"", "classSelect" => "js-gender"]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Birthday:", "attributeInput" => "name=\"birthday\" type=\"text\" placeholder=\"Select the Birthday\" value=\"".$birthday."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "CURP:", "attributeInput" => "name=\"curp\" type=\"text\" placeholder=\"Write the CURP\" value=\"".$curp."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "RFC:", "attributeInput" => "name=\"rfc\" type=\"text\" placeholder=\"Write the RFC\" value=\"".$rfc."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "NSS:", "attributeInput" => "name=\"nss\" type=\"text\" placeholder=\"Write the NSS\" value=\"".$nss."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Phone:", "attributeInput" => "name=\"phone\" type=\"text\" placeholder=\"Write the Phone\" value=\"".$phone."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Email address:", "attributeInput" => "name=\"email\" type=\"text\" placeholder=\"Write the Email address\" value=\"".$email."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "State / Province:", "attributeInput" => "name=\"state\" type=\"text\" placeholder=\"Write the State / Province\" value=\"".$state."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Township:", "attributeInput" => "name=\"township\" type=\"text\" placeholder=\"Write the Township\" value=\"".$township."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "City:", "attributeInput" => "name=\"city\" type=\"text\" placeholder=\"Write the City\" value=\"".$city."\""]) @endcomponent
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "ZIP / Postal code:", "attributeInput" => "name=\"zip\" type=\"text\" placeholder=\"Write the ZIP / Postal code\" value=\"".$postal_code."\""]) @endcomponent
				<div class="md:col-span-3 sm:col-span-2 col-span-1">
					<label class="text-darkSoft font-semibold">Address:</label>
					<textarea type="text" name="address" class="w-full text-third h-16 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Write the Address complete">{{ $address }}</textarea>
				</div>
			</div>
			<div class="mt-8 mb-2">
				<label class="font-bold text-primary xs:text-md"><i class="fa-solid fa-user-plus"></i> USER CREATION</label>
			</div rounded-mdv>
			<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "User:", "attributeInput" => "name=\"user\" type=\"text\" placeholder=\"Write an User\" value=\"".$user."\""]) @endcomponent
				@php
					$options = collect();
					$kindUserData =   ["0"=>"Administrator","1"=>"Employee"];
					$kindUserSelected   =   isset($requests->user_kind) && $requests->user_kind == '0' ? '0' : '1';
					foreach ($kindUserData as $k=>$kindUser)
					{
						if ($kindUserSelected == $k)
						{
							$options    =   $options->concat([["value"  =>  $k, "content" => $kindUser, "selected" => "selected"]]);
						}
						else
						{
							$options    =   $options->concat([["value"  =>  $k, "content" => $kindUser]]);
						}
					}
				@endphp
				@component('components.inputs.select', ["label" => "User Kind", "options" => $options, "attributeSelect" => "name=\"userKind\" multiple=\"multiple\"", "classSelect" => "js-userKind"]) @endcomponent
				<div class="relative col-span-1">
					@component('components.inputs.inputCombo', ["classCombo" => "absolute", "label" => "Password:", "attributeInput" => "name=\"password\" type=\"password\" placeholder=\"Write a Password\" value=\"".$password."\"", "clasInput" => "password"]) @endcomponent
					<div class="relative w-8 float-right mt-8 mr-2">
                        <span id="btnShowPassword"><i class="w-6 fa-solid fa-eye hover:text-primary transition duration-500 ease-in-out"></i></span>
                        <span id="btnHidePassword" class="hidden"><i class="w-6 fa-solid fa-eye-slash hover:text-primary transition duration-500 ease-in-out"></i></span>
                    </div>
				</div>
				<div class="relative col-span-1">
					@component('components.inputs.inputCombo', ["classCombo" => "absolute", "label" => "Confirm Password:", "attributeInput" => "name=\"passwordConfirmation\" type=\"password\" placeholder=\"Confirm the Password\" value=\"".$password."\"", "clasInput" => "passwordConfirm"]) @endcomponent
					<div class="relative w-8 float-right mt-8 mr-2">
                        <span id="btnShowConfirmPassword"><i class="w-6 fa-solid fa-eye hover:text-primary transition duration-500 ease-in-out"></i></span>
                        <span id="btnHideConfirmPassword" class="hidden"><i class="w-6 fa-solid fa-eye-slash hover:text-primary transition duration-500 ease-in-out"></i></span>
                    </div>
					<div class="validatePasswordConfirmation bg-dangerSoft bg-opacity-50 rounded-md hidden p-2 content-center"> <label class="text-third font-bold">Error: </label><label class="ml-6 text-center text-dangerDark font-semibold">Passwords don´t match</label><i class="text-dangerDark fa-solid fa-circle-exclamation h-6 ml-6"></i></div>
				</div>
			</div>
			<div class="w-full flex justify-center my-8 space-x-4">
				@if (isset($requests))
					<button class="save w-24 h-10 bg-primary hover:bg-primarySoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-pencil"></i> Update</button>
				@else
					<button class="save w-24 h-10 bg-secondary hover:bg-secondarySoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
				@endif
				<a href="{{ route('users.search') }}">
					<button type="button" class="w-24 h-10 bg-danger hover:bg-dangerSoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
				</a>
			</div>
		</form>
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
			$('.js-gender').select2({
				placeholder             : "Select a Gender",
				language                : "en",
				maximumSelectionLength  : 1,
                allowClear              : true,
				width                   : "100%"
			})
			$('.js-userKind').select2({
				placeholder             : "Select the User kind",
				language                : "en",
				maximumSelectionLength  : 1,
				width                   : "100%"
			});
			$(document).on('keyup','.password',function(){
				validPassword()
			})
			.on('keyup','.passwordConfirm',function(){
				validPassword()
			})
            .on('click','#btnShowPassword',function()
            {
                $('#btnShowPassword').addClass('hidden');
                $('#btnHidePassword').removeClass('hidden');
                $('.password').prop('type','text');
            })
            .on('click','#btnHidePassword',function()
            {
                $('#btnShowPassword').removeClass('hidden');
                $('#btnHidePassword').addClass('hidden');
                $('.password').prop('type','password');
            })
            .on('click','#btnShowConfirmPassword',function()
            {
                $('#btnShowConfirmPassword').addClass('hidden');
                $('#btnHideConfirmPassword').removeClass('hidden');
                $('.passwordConfirm').prop('type','text');
            })
            .on('click','#btnHideConfirmPassword',function()
            {
                $('#btnShowConfirmPassword').removeClass('hidden');
                $('#btnHideConfirmPassword').addClass('hidden');
                $('.passwordConfirm').prop('type','password');
            });
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


