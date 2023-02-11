@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Employees";
@endphp

@section('content')
<div class="mx-4" id="formRegisterUser">
	@if (isset($requests))
		<form action="{{route('employees.update',$requests->id)}}" method="POST">
			@method('PUT')
	@else
		<form action="{{route('employees.store')}}" method="POST">
	@endif
		@csrf
		<div class="flex mt-4 p-2">
			<a href="{{route('employees.index')}}"><button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out"><i class="w-6 fa-solid fa-angles-left"></i> Back</button></a>
		</div>
		<div class="mt-4 flex justify-center space-x-8">
			<a href="{{route('employees.create')}}">
				<button class="w-32 p-2 bg-third hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold" type="button">Create</button>
			</a>
			<a href="{{route('employees.search')}}">
				<button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold" type="button">Search</button>
			</a>
		</div>
		<div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
			@if (isset($requests))
				<i class="fa-solid fa-user-pen"></i> Employee edition
			@else
				<i class="fa-solid fa-user-plus"></i> Employee creation
			@endif
		</div>

		<div class="text-center md:mt-8 mt-6 p-2 bg-primary items-center  rounded-full flex lg:inline-flex w-full">
			<span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
			<span class="font-semibold mr-2 text-left text-light md:text-base sm:text-sm text-xs">In order to perform the employee registration correctly, it is necessary to fill in all the fields with the requested data.</span>
			<svg class="fill-current opacity-75 h-4 w-4  text-lightSoft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
		</div>
		<div class="mt-8 mb-2">
			<label class="font-bold text-primary xs:text-md divide-y-2 divide-solid divide-secondary"><i class="text-xl fa-solid fa-user-tie"></i> EMPLOYEE INFORMATION</label>
		</div>
		<div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
			@php
				$clabe      =   isset($requests->clabe) ? $requests->clabe : "";
				$alias      =   isset($requests->alias) ? $requests->alias : "";
				$name       =   isset($requests->user->name) ? $requests->user->name : "";
				$password   =   isset($requests->password) ? $requests->password : "";
			@endphp
			@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Clabe:", "attributeInput" => "readonly name=\"clabe\" id=\"clabe\" type=\"text\" placeholder=\"Clabe\" value=\"".$clabe."\"", 'clasInput' => 'bg-light bg-opacity-10']) @endcomponent
			@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Alias (Optional):", "attributeInput" => "name=\"alias\" type=\"text\" placeholder=\"Write an Alias\" value=\"".$alias."\""]) @endcomponent
			@php
				$options = collect();
				$usersData  =   App\Models\User::orderBy('id','ASC')->get();
				foreach ($usersData as $users)
				{
					if (isset($requests) && ($requests->userId==$users->id))
					{
						$options = $options->concat([["value"  =>  $users->id, "content" => $users->id." - ".$users->user, "selected"   =>  "selected"]]);
					}
					else
					{
						$options = $options->concat([["value"  =>  $users->id, "content" => $users->id." - ".$users->user]]);
					}
				}
			@endphp
			@component('components.inputs.select', ["label" => "User:", "options" => $options, "attributeSelect" => "name=\"user\" multiple=\"multiple\" id=\"user\""]) @endcomponent
			@component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:",  "attributeInput" => "disabled name=\"name\" type=\"text\" placeholder=\"Name\" id=\"name\" value=\"".$name."\""]) @endcomponent
			@php
				$options = collect();
				$areasData  =   App\Models\Area::orderBy('id','ASC')->get();
				foreach ($areasData as $area)
				{
					if (isset($requests->area) && $requests->area==$area->id)
					{
						$options = $options->concat([["value"  =>  $area->id, "content" => $area->id." - ".$area->name, "selected" => "selected"]]);
					}
					else
					{
						$options = $options->concat([["value"  =>  $area->id, "content" => $area->id." - ".$area->name]]);
					}
				}
			@endphp
			@component('components.inputs.select', ["label" => "Area:", "options" => $options, "attributeSelect" => "name=\"area\" multiple=\"multiple\" id=\"area\""]) @endcomponent
			@php
				$options = collect();
				$departmentData  =   App\Models\Department::orderBy('id','ASC')->get();
				foreach ($departmentData as $department)
				{
					if (isset($requests->department) && $requests->department==$department->id)
					{
						$options = $options->concat([["value"  =>  $department->id, "content" => $department->id." - ".$department->name, "selected" => "selected"]]);
					}
					else
					{
						$options = $options->concat([["value"  =>  $department->id, "content" => $department->id." - ".$department->name]]);
					}
				}
			@endphp
			@component('components.inputs.select', ["label" => "Department:", "options" => $options, "attributeSelect" => "name=\"department\" multiple=\"multiple\" id=\"department\""]) @endcomponent
			<div class="col-span-1 sm:mt-0 mt-3">
				<div class="relative">
					@component('components.inputs.inputCombo', ["classCombo" => "absolute", "label" => "Password:", "attributeInput" => "name=\"password\" id=\"password\" type=\"password\" placeholder=\"Write a Password\" value=\"".$password."\""]) @endcomponent
					<div class="relative w-8 float-right mt-8 mr-2">
						<span id="btnShowPassword"><i class="w-6 fa-solid fa-eye text-primarySoft hover:text-primary transition duration-300 ease-in-out" title="Show Password"></i></span>
						<span id="btnHidePassword" class="hidden"><i class="w-6 fa-solid fa-eye-slash text-primarySoft hover:text-primary transition duration-300 ease-in-out" title="Hide Password"></i></span>
					</div>
				</div>
			</div>
			<div class="col-span-1 sm:mt-0 mt-5">
				<div class="relative">
					@component('components.inputs.inputCombo', ["classCombo" => "absolute", "label" => "Confirm Password:", "attributeInput" => "name=\"confirmPassword\" id=\"confirmPassword\" type=\"password\" placeholder=\"Confirm Password\" value=\"".$password."\""]) @endcomponent
					<div class="relative w-8 float-right mt-8 mr-2">
						<span id="btnShowConfirmPassword"><i class="w-6 fa-solid fa-eye text-primarySoft hover:text-primary transition duration-300 ease-in-out" title="Show Password Confirmation"></i></span>
						<span id="btnHideConfirmPassword" class="hidden"><i class="w-6 fa-solid fa-eye-slash text-primarySoft hover:text-primary transition duration-300 ease-in-out" title="Hide Password Confirmation"></i></span>
					</div>
				</div>
			</div>
			<div class="col-span-1 mt-6 validatePasswordConfirmation bg-dangerSoft bg-opacity-50 rounded-md hidden p-2 content-center"> <label class="text-third font-bold">Error: </label><label class="ml-6 text-center text-dangerDark font-semibold">Passwords don´t match</label><i class="text-dangerDark fa-solid fa-circle-exclamation h-6 ml-6"></i></div>
		</div>
		<div class="w-full flex justify-center my-8 space-x-4">
			<button class="save w-24 h-10 bg-secondary hover:bg-secondarySoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
			<button class="w-24 h-10 bg-danger hover:bg-dangerSoft rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
		</div>
	</form>
@endsection
@section('scripts')
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
			$('#user').select2({
				placeholder             : "Select an User",
				language                : "en",
				maximumSelectionLength  : 1,
				width                   : "100%"
			})
			$('#area').select2({
				placeholder             : "Select an Area",
				language                : "en",
				maximumSelectionLength  : 1,
				width                   : "100%"
			})
			$('#department').select2({
				placeholder             : "Select a Department",
				language                : "en",
				maximumSelectionLength  : 1,
				width                   : "100%"
			})
			$(document).on('change','#user',function()
			{
				$('#name').val('');
				userId   =   $('#user').val();
				$.ajax({
					type:   "get",
					url:    '{{route('employees.getUser')}}',
					data:   {"userId":userId},
					success: function (response)
					{
						if (response!="")
						{
							$('#name').val(response);
						}
					}
				})
			})
			.on('click','#btnShowPassword',function()
			{
				$('#btnShowPassword').addClass('hidden');
				$('#btnHidePassword').removeClass('hidden');
				$('#password').prop('type','text');
			})
			.on('click','#btnHidePassword',function()
			{
				$('#btnShowPassword').removeClass('hidden');
				$('#btnHidePassword').addClass('hidden');
				$('#password').prop('type','password');
			})
			.on('click','#btnShowConfirmPassword',function()
			{
				$('#btnShowConfirmPassword').addClass('hidden');
				$('#btnHideConfirmPassword').removeClass('hidden');
				$('#confirmPassword').prop('type','text');
			})
			.on('click','#btnHideConfirmPassword',function()
			{
				$('#btnShowConfirmPassword').removeClass('hidden');
				$('#btnHideConfirmPassword').addClass('hidden');
				$('#confirmPassword').prop('type','password');
			})
			.on('change','#user, #area, #department',function()
			{
				user = $('#user').val() < 10 ? '0'+$('#user').val() : $('#user').val();
				area = $('#area').val() < 10 ? '0'+$('#area').val() : $('#area').val();
				department= $('#department').val() < 10 ? '0'+$('#department').val() : $('#department').val();
				if(user!='0' && area!='0' && department!='0')
				{
					$('#clabe').val('22'+area+department+user);
				}
				else
				{
					$('#clabe').val('');
				}
				})
				.on('keyup','#password',function(){
					validPassword()
				})
				.on('keyup','#confirmPassword',function(){
					validPassword()
				})
		});
		function validPassword()
		{
			password = $('#password').val();
			passwordConfirm = $('#confirmPassword').val();
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
