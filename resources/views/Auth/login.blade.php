@extends('layouts.layout')

@section('content')
	<div class="grid grid-cols-2 md:mt-10 sm:mt-8 xs:mt-6 grid-rows-2 xs:grid-rows-2 sm:grid-rows-2 md:grid-rows-1 md:mx-20 sm:mx-24 xs:mx-12 gap-x-16">
		<div class="md:col-span-1 sm:col-span-2 xs:col-span-2 row-span-1 col-start-1 w-full md:order-none sm:order-last xs:order-last" id="left">
			<div class="flex justify-center h-60 mb-8  md:block sm:hidden xs:hidden" id="enterprise-image">
				<img class="md:w-3/4 sm:w-1/2 xs:w-2/5 w-2/5" src="{{URL::asset('http://localhost/employeeadmin/public/img/sign_in.svg')}}" alt="Image">
			</div>
			<div class="user-form block sm:mt-4 md:mt-4 xs:mt-6 mt-8">
				<div>
					<label class="font-bold md:text-lg sm:text-md text-darkSoft tracking-wide">User</label>
				</div>
				<div>
					<input type="text" name="user" class="w-full bg-lightSoft md:h-12 sm:h-12 xs:h-10 h-12 font-semibold text-dark rounded-md px-4 focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Write your user name">
				</div>
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold md:text-lg sm:text-md text-darkSoft tracking-wide">Password</label>
				</div>
				<div>
					<input type="password" name="user" class="w-full md:h-12 sm:h-10 xs:h-12 h-12 font-semibold text-dark rounded-md px-4 focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Write your password">
				</div>
			</div>
			<div class="buttons-sign block mt-4">
				<div class="grid grid-cols-2">
					<div class="col-span-1">
						<div class="inline-block w-full">
							<div>
								<button class="btnSign bg-secondary w-full md:h-12 sm:h-10 xs:h-8 h-12 rounded-md font-bold text-lg text-light hover:bg-secondarySoft hover:text-lightSoft tracking-wide">Sign</button>
							</div>
						</div>
					</div>
					<div class="col-span-1">
						<div class="inline-block w-full">
							<div>
								<button class="btnRegister font-bold w-full md:h-12 sm:h-10 xs:h-8 h-12 text-darkSoft text-lg hover:text-thirdSoft tracking-wide">Register</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-span-2 mt-4">
					<div class="mt-2 text-primary font-semibold hover:text-primarySoft">
						<span class="tracking-wide text-darkSoft font-semibold">Forgot your password?</span> <a href="#"><button class="ml-2 font-bold tracking-wide">Restore!</button></a>
					</div>
				</div>
			</div>
		</div>
		<div class="md:col-span-1 sm:col-span-2 xs:col-span-2 sm:col-start-1 row-span-1 rounded-md bg-lightSoft xs:h-50 h-full">
			<div class="w-full text-center content-center rounded-md flex justify-center md:p-8 sm:pb-2 xs:mb-2 sm:p-6 xs:p-4">
				<div id='reloj' class="text-center w-full rounded-md bg-light">
					<div class='reloj-contenedor md:p-4 sm:p-4 xs:p-2' id='contenedor'>
						<div id='hora' class="digitalClock text-third bg-transparent text-center w-full md:text-5xl sm:text-5xl xs:text-4xl font-semibold tracking-wider"></div>
						<div id='fecha' name="fecha" class="digitalClock text-third bg-transparent text-center w-full md:text-lg sm:text-md xs:text-sm font-semibold">fecha</div>
					</div>
				</div>
			</div>
			<div class="flex justify-center sm:p-4">
				<img class="md:w-full sm:w-2/5 xs:w-2/5 w-2/5" src="{{URL::asset('http://localhost/employeeadmin/public/img/sign_in.svg')}}" alt="Image">
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	<script>
		$(document).ready(function()
		{
			horaReloj   =   new Date();
			$($clockd).val(horaReloj);
		});
	</script>
@endsection

