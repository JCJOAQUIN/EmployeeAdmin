@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Asistances";
@endphp
@section('content')
	<div class="text-2xl font-semibold pb-1 mt-12 border-b-4 border-primary">
		General Asistance List
	</div>
	<div class="md:flex justify-end block mt-12">
        <div class="grid md:grid-cols-4 grid-cols-1">
            <div class="col-span-1 text-center text-xl text-third font-bold mb-4">
                Filters <i class="fa-solid fa-filter"></i>
            </div>
            <div class="col-span-1 md:ml-4 mb-4">
                <label class="font-bold text-darkSoft">Employee:</label>
                <select class="text-third font-semibold w-full p-2 border-2 border-primarySoft rounded-md bg-lightSoft" name="employee" id="employee">
                    @php
                        $employeeData	=	["JOSE CARLOS JOAQUIN VAZQUEZ","JOSE CARLOS JOAQUIN VAZQUEZ","JOSE CARLOS JOAQUIN VAZQUEZ","JOSE CARLOS JOAQUIN VAZQUEZ","JOSE CARLOS JOAQUIN VAZQUEZ"];
                    @endphp
                    <option value="">Select an Employee</option>
                    @foreach ($employeeData as $employee)
                        <option value="1">{{$employee}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-1 md:ml-4 mb-4">
                <label class="font-bold text-darkSoft">Timeliness:</label>
                <select class="text-third font-semibold w-full p-2 border-2 border-primarySoft rounded-md bg-lightSoft" name="timeliness" id="timeliness">
                    @php
                        $timelinessData	=	["Punctual","Late","Absence","Leave","Break"];
                    @endphp
                    <option value="">Select a Timeliness</option>
                    @foreach ($timelinessData as $timeliness)
                        <option value="1">{{$timeliness}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-1 md:ml-4 mb-4">
                <label class="font-bold text-darkSoft">Assistance type:</label>
                <select class="text-third font-semibold w-full p-2 border-2 border-primarySoft rounded-md bg-lightSoft" name="asistance" id="asistance">
                    @php
                        $asistanceData	=	["Entry","Exit"];
                    @endphp
                    <option value="">Select an Assistance type</option>
                    @foreach ($asistanceData as $asistance)
                        <option value="1">{{$asistance}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-8"><button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-md text-lightSoft hover:text-light font-semibold"><i class="fa-solid fa-magnifying-glass"></i> SEARCH</button></div>
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
        });
    </script>
@endsection
