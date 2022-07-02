@extends('layouts.layout')

@section('content')
	<div class="grid grid-cols-11 mt-12 mx-24">
		<div class="col-span-5 col-start-1 w-full id="left">
			<div id="enterprise-image" class="w-full h-60 text-center mb-8">
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-darkSoft">User</label>
				</div>
				<div>
					<input type="text" name="user" class="w-full bg-lightSoft h-12 font-semibold text-dark rounded-md px-4 focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Introduzca su nombre de usuario">
				</div>
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-darkSoft">Password</label>
				</div>
				<div>
					<input type="password" name="user" class="w-full h-12 font-semibold text-dark rounded-md px-4 focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150" placeholder="Introduzca su contraseña">
				</div>
			</div>
			<div class="buttons-sign block mt-4">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <div class="inline-block">
                            <div>
                                <button class="btnSign bg-secondary w-40 h-10 rounded-md font-bold text-lg text-light hover:bg-secondarySoft hover:text-lightSoft">Sign</button>
                            </div>
                            <div class="mt-2">
                                <span href="#" class=" text-darkSoft font-semibold">Forget your password?</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="inline-block">
                            <div>
                                <button class="btnRegister font-bold w-40 h-10 text-darkSoft text-lg hover:text-thirdSoft">Register</button>
                            </div>
                            <div class="mt-2 text-primary font-semibold hover:text-primarySoft">
                                <a href="#">Click here to restore!</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="col-span-5 col-start-7 rounded-md bg-lightSoft">
			<div class="w-full  text-center content-center rounded-md flex justify-center p-8">
                <div id='reloj' class="text-center w-full rounded-md bg-light">
                    <div class='reloj-contenedor p-4' id='contenedor'>
                        <div id='hora' class="digitalClock text-third bg-transparent text-center w-full text-6xl font-semibold"></div>
                        <div id='fecha' name="fecha" class="digitalClock text-third bg-transparent text-center w-full text-lg font-semibold"> fecha</div>
                    </div>
                </div>
				{{-- <div class="w-full rounded-md h-24 bg-light flex item-center contenedor">
                    <input type="text" class="digitalClock text-third bg-transparent text-center w-full text-5xl font-semibold" id="hora" disabled>
                    <div id='fecha' name="fecha" Style="font-size:1.5rem; color:var(--primary);"></div>
				</div> --}}
			</div>
            <input type="text" class="clockd">
			<div class="flex justify-center">
				<img class="w-3/4" src="{{URL::asset('http://localhost/employeeadmin/public/img/sign_in.svg')}}" alt="Image">
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

