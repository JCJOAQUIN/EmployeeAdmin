@extends('layouts.layout')
@section('title', 'Sing Up')
@php
	$navBarTitle	=	"Register";
	$bgBody			=	"bg-lightSoft";
@endphp

@section('content')
	<div class="md:mx-24 sm:mx-10 mx-0.5" id="formRegisterUser">
		{{-- {!! Form::open('method="POST') !!} --}}

			{{-- <div class="mx-8 mt-4 text-lg text-dangerSoft font-semibold"><a href="{{route('auth.login')}}"><i class=" w-6 fa-solid fa-angles-left"></i> Back</a></div>
			<div class="flex justify-center w-full my-4">
				<div class="w-full mx-8 h-16 sm:text-sm p-4 text-lg xs:text-xs text-darkDefault font-semibold align-center bg-secondarySoft grid items-center text-center rounded-md bg-opacity-60" id="alert-register">Please fill in all the fields requested below to complete your registration correctly.</div>
			</div>
			<div class="mt-8 mb-2 mx-8">
				<label class="font-bold text-primary xs:text-md divide-y-2 divide-solid divide-secondary"><i class="text-xl fa-solid fa-user-tie"></i> PERSONAL INFORMATION</label>
			</div>
			<div class="grid grid-cols-2 mx-8 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Name</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Name(s)">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Last name</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Last name">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Second last name</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Second last name">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Gender</label>
                    <select name="gender" multiple="multiple" class="js-gender w-full text-third h-10 rounded-md font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150">
                        <option value="" selected>Select a gender</option>
                        <option value="1">Female</option>
                        <option value="2">Male</option>
                    </select>
                </div>
		        <div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Date of birth</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Date of birth">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">CURP</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="CURP">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">RFC</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="RFC">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">NSS</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="NSS">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Phone</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Phone">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Email address</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Email address">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">State / Province</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="State / Province">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Municipality</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Municipality">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">City</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="City">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">ZIP / Postal code</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="ZIP / Postal code">
				</div>
				<div class="col-span-2">
					<label class="text-darkSoft font-semibold">Address</label>
					<textarea type="text" class="w-full text-third h-16 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Write your Address complete"></textarea>
				</div>
			</div>
			<div class="mt-8 mb-2 mx-8">
				<label class="font-bold text-primary xs:text-md"><i class="fa-solid fa-user-plus"></i> USER CREATION</label>
			</div rounded-mdv>
			<div class="grid grid-cols-2 mx-8 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">User</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="User name">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Password</label>
					<input type="password" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Password">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Confirm Password</label>
					<input type="password" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-secondarySoft ring-1 transition ease-in duration-150" placeholder="Confirm Password">
				</div>
			</div>
			<div class="w-full flex justify-center my-8 space-x-4">
				<button class="save w-24 h-10 bg-secondary rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
				<button class="w-24 h-10 bg-third rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
			</div> --}}
		{{-- {!! Form::close() !!} --}}
	</div>
@endsection
@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    {{-- <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('select2/dist/js/select2.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            swal.fire({
                imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                showConfirmButton: false,
                timer: 800,
            });
            $(".js-gender").select2({
                placeholder         :    "Select a gender",
                language            :   "en",
                maximumSelectionLength  : 1,
            })
        });
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function()
        {
            swal.fire({
                imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                showConfirmButton: false,
                timer: 800,
            });
        });
    </script>
@endsection


