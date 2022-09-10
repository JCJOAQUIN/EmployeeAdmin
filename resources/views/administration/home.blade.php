@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Home";
@endphp
@section('content')
{{-- <a href="{{route('administration.asistance')}}">
    <button class="" type="button"><i class="text-xl fa-solid fa-circle-check mr-2"></i> Assistance</button>
</a> --}}
    <div class="my-12">
        <label class="text-lg">Welcome to the Employees Admin System!</label>
    </div>
    <div class="text-2xl pb-1 font-semibold border-b-4 border-primary">
        Today Asistance List
    </div>
    <div class="bg-thirdSoft md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:px-6 px-2 py-4">
		<div class="md:border-none rounded-md border-2 border-solid border-primary overflow-hidden pt-2 mb-4 md:shadow-none shadow-md">
			<div class="grid md:grid-cols-12 grid-cols-6 text-third text-center py-2 md:border-b-2 border-solid border-primary border-opacity-60">
				<div class="col-span-1 px-2 font-bold">1</div>
				<div class="col-span-1">icon</div>
				<div class="md:col-span-3 col-span-4">JOSE CARLOS JOAQUIN VAZQUEZ</div>
				<div class="md:col-span-2 md:block hidden">I/O entry</div>
				<div class="md:col-span-2 md:block hidden">Puntual</div>
				<div class="md:col-span-2 md:block hidden">01/01/2022 00:00</div>
				<div class="md:col-span-1 md:block hidden"><i class="text-secondary fa-solid fa-user-clock"></i></div>
			</div>
			<div class="md:hidden p-4 bg-lightSoft">
				<div class="grid sm:grid-cols-4 grid-cols-2 text-center text-third md:hidden">
					<div class="col-span-1 py-1">I/O entry</div>
					<div class="col-span-1 py-1">Puntual</div>
					<div class="col-span-1 py-1">01/01/2022 00:00</div>
					<div class="col-span-1 py-1"><i class="text-secondary fa-solid fa-user-clock"></i></div>
				</div>
			</div>
		</div>
		<div class="md:border-none rounded-md border-2 border-solid border-primary overflow-hidden pt-2 mb-4 md:shadow-none shadow-md">
			<div class="grid md:grid-cols-12 grid-cols-6 text-third text-center py-2 md:border-b-2 border-solid border-primary border-opacity-60">
				<div class="col-span-1 px-2 font-bold">1</div>
				<div class="col-span-1">icon</div>
				<div class="md:col-span-3 col-span-4">JOSE CARLOS JOAQUIN VAZQUEZ</div>
				<div class="md:col-span-2 md:block hidden">I/O entry</div>
				<div class="md:col-span-2 md:block hidden">Retardo</div>
				<div class="md:col-span-2 md:block hidden">01/01/2022 00:00</div>
				<div class="md:col-span-1 md:block hidden"><i class="text-danger fa-solid fa-user-clock"></i></div>
			</div>
			<div class="md:hidden p-4 bg-lightSoft">
				<div class="grid sm:grid-cols-4 grid-cols-2 text-center text-third md:hidden">
					<div class="col-span-1 py-1">I/O entry</div>
					<div class="col-span-1 py-1">Retardo</div>
					<div class="col-span-1 py-1">01/01/2022 00:00</div>
					<div class="col-span-1 py-1"><i class="text-danger fa-solid fa-user-clock"></i></div>
				</div>
			</div>
		</div>
		<div class="md:border-none rounded-md border-2 border-solid border-primary overflow-hidden pt-2 mb-4 md:shadow-none shadow-md">
			<div class="grid md:grid-cols-12 grid-cols-6 text-third text-center py-2 md:border-b-2 border-solid border-primary border-opacity-60">
				<div class="col-span-1 px-2 font-bold">1</div>
				<div class="col-span-1">icon</div>
				<div class="md:col-span-3 col-span-4">JOSE CARLOS JOAQUIN VAZQUEZ</div>
				<div class="md:col-span-2 md:block hidden">I/O entry</div>
				<div class="md:col-span-2 md:block hidden">Falta</div>
				<div class="md:col-span-2 md:block hidden">01/01/2022 00:00</div>
				<div class="md:col-span-1 md:block hidden"><i class="text-dangerSoft fa-solid fa-user-clock"></i></div>
			</div>
			<div class="md:hidden p-4 bg-lightSoft">
				<div class="grid sm:grid-cols-4 grid-cols-2 text-center text-third md:hidden">
					<div class="col-span-1 py-1">I/O entry</div>
					<div class="col-span-1 py-1">Falta</div>
					<div class="col-span-1 py-1">01/01/2022 00:00</div>
					<div class="col-span-1 py-1"><i class="text-dangerSoft fa-solid fa-user-clock"></i></div>
				</div>
			</div>
		</div>
		<div class="md:border-none rounded-md border-2 border-solid border-primary overflow-hidden pt-2 mb-4 md:shadow-none shadow-md">
			<div class="grid md:grid-cols-12 grid-cols-6 text-third text-center py-2 md:border-b-2 border-solid border-primary border-opacity-60">
				<div class="col-span-1 px-2 font-bold">1</div>
				<div class="col-span-1">icon</div>
				<div class="md:col-span-3 col-span-4">JOSE CARLOS JOAQUIN VAZQUEZ</div>
				<div class="md:col-span-2 md:block hidden">I/O entry</div>
				<div class="md:col-span-2 md:block hidden">Descanso</div>
				<div class="md:col-span-2 md:block hidden">01/01/2022 00:00</div>
				<div class="md:col-span-1 md:block hidden"><i class=" text-darkSoft fa-solid fa-user-clock"></i></div>
			</div>
			<div class="md:hidden p-4 bg-lightSoft">
				<div class="grid sm:grid-cols-4 grid-cols-2 text-center text-third md:hidden">
					<div class="col-span-1 py-1">I/O entry</div>
					<div class="col-span-1 py-1">Descanso</div>
					<div class="col-span-1 py-1">01/01/2022 00:00</div>
					<div class="col-span-1 py-1"><i class=" text-darkSoft fa-solid fa-user-clock"></i></div>
				</div>
			</div>
		</div>
		<div class="md:border-none rounded-md border-2 border-solid border-primary overflow-hidden pt-2 mb-4 md:shadow-none shadow-md">
			<div class="grid md:grid-cols-12 grid-cols-6 text-third text-center py-2 md:border-b-2 border-solid border-primary border-opacity-60">
				<div class="col-span-1 px-2 font-bold">1</div>
				<div class="col-span-1">icon</div>
				<div class="md:col-span-3 col-span-4">JOSE CARLOS JOAQUIN VAZQUEZ</div>
				<div class="md:col-span-2 md:block hidden">I/O entry</div>
				<div class="md:col-span-2 md:block hidden">Permiso</div>
				<div class="md:col-span-2 md:block hidden">01/01/2022 00:00</div>
				<div class="md:col-span-1 md:block hidden"><i class="text-thirdSoft fa-solid fa-user-clock"></i></div>
			</div>
			<div class="md:hidden p-4 bg-lightSoft">
				<div class="grid sm:grid-cols-4 grid-cols-2 text-center text-third md:hidden">
					<div class="col-span-1 py-1">I/O entry</div>
					<div class="col-span-1 py-1">Permiso</div>
					<div class="col-span-1 py-1">01/01/2022 00:00</div>
					<div class="col-span-1 py-1"><i class="text-thirdSoft fa-solid fa-user-clock"></i></div>
				</div>
			</div>
		</div>
	</div>
	<div class="text-center mt-8"> <| pagination |> </div>
@endsection
