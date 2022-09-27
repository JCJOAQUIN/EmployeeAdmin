@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Employees";
@endphp

@section('content')
<div class="mx-4" id="formRegisterUser">
    {{-- {!! Form::open('method="POST') !!} --}}
    <div class="flex mt-4 p-2">
        <a href="{{route('employees.index')}}"><button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out"><i class="w-6 fa-solid fa-angles-left"></i> Back</button></a>
    </div>
    <div class="mt-12 flex justify-center space-x-8">
        <a href="{{route('employees.create')}}">
            <button class="w-32 p-2 bg-third hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold">Create</button>
        </a>
        <a href="{{route('employees.search')}}">
            <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold">Search</button>
        </a>
    </div>
    <div class="text-2xl font-semibold pb-1 mt-12 border-b-4 border-primary">
		<i class="fa-solid fa-user-plus"></i> Employee creation
	</div>
    <div ></div>

    <div class="text-center md:mt-8 mt-6">
        <div class="p-2 bg-primary items-center  rounded-full flex lg:inline-flex">
          <span class="flex rounded-full bg-lightSoft text-third uppercase px-4 lg:py-1 py-2 text-xs font-bold mr-3">Note</span>
          <span class="font-semibold mr-2 text-left text-light md:text-base sm:text-sm text-xs">In order to perform the employee registration correctly, it is necessary to fill in all the fields with the requested data.</span>
          <svg class="fill-current opacity-75 h-4 w-4  text-lightSoft" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
        </div>
    </div>

    {{-- @endsection

    @section('content') --}}


			{{-- <div class="mt-8 mb-2 mx-8">
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
			</div> --}}

			<div class="grid grid-cols-2 mx-8 bg-light bg-opacity-60 p-6 sm:p-8 rounded-md gap-x-8">
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Clabe</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Clabe">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Alias</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Alias">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Name</label>
					<input type="text" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Employee name">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold"> User </label>
                    <select class="w-full {{-- text-third h-10 rounded-md px-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150 js-user appearance-none select  --}} js-user" placeholder="Select an user" name="user"  multiple="multiple" id="user">
                        @php
                            $userData   =   ['Jose Carlos Joaquin Vazquez','Diana Lucelly Espinosa Carballo','Carlos Izan Joaquin Espinosa'];
                        @endphp
                        @foreach ($userData as $users)
                            <option value={{$users}}>{{$users}}</option>
                        @endforeach
                    </select>
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Password</label>
					<input type="password" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Password">
				</div>
				<div class="md:col-span-1 xs:col-span-2 col-span-2 pb-4">
					<label class="text-darkSoft font-semibold">Confirm Password</label>
					<input type="password" class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Confirm Password">
				</div>
			</div>
			<div class="w-full flex justify-center my-8 space-x-4">
				<button class="save w-24 h-10 bg-secondary rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-check"></i> Save</button>
				<button class="w-24 h-10 bg-third rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-xmark"></i> Cancel</button>
			</div>
		{{-- {!! Form::close() !!} --}}
	</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('.js-user').select2({
                placeholder         :   "Select an user",
                language            :   "en",
                maximumSelectionLength  : 1,
            })
        });
    </script>
@endsection
