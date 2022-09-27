<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&family=Oxygen:wght@300;400;700&family=Roboto:wght@300;400&display=swap">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>EMS - {{$navBarTitle}}</title>
		@yield('css')
	</head>
	<body class="@if (isset($bgBody)) {{$bgBody}} @endif">
		<header>
			<div class=" bg-primary grid md:grid-cols-12 grid-cols-2 w-full items-center fixed z-20">
				<div class="text-light text-lg text-center sm:ml-4 ml-12 font-semibold md:col-span-3 col-span-1">Administrator User{{-- {{$navBarTitle}} --}}</div>
				<div class="col-span-1 mr-8 grid justify-items-end p-2 md:hidden">
                    <button class="font-bold md:hidden text-4xl text-light menuButton"><i class="fa-solid fa-bars"></i></button>
				</div>
				<div class="text-light md:col-span-9 md:grid md:grid-cols-5 mr-4 md:text-md xs:text-sm hidden">
					<div class="col-span-1">
						<a @if ($navBarTitle != "Home") href="{{route('administration.index')}}" @endif>
							<button class="@if($navBarTitle == "Home") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Home") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-home mr-2" title="Home"></i> Home</button>
						</a>
					</div>
					<div class="col-span-1">
						<a @if ($navBarTitle != "Asistances") href="{{route('administration.asistance')}}" @endif>
							<button class="@if($navBarTitle == "Asistances") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Asistances") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-circle-check mr-2"></i> Assistance</button>
						</a>
					</div>
					<div class="col-span-1">
						<a @if ($navBarTitle != "Schedules") href="{{route('administration.schedules')}}" @endif>
							<button class="@if($navBarTitle == "Schedules") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Schedules") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-calendar-plus mr-2"></i> Schedules</button>
						</a>
					</div>
					<div class="col-span-1 relative inline-block text-left containerDropDown">
						<div>
							<button type="button" class="@if($navBarTitle == "Users" || $navBarTitle == "Employees") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Users" || $navBarTitle != "Employees") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif btndrop inline-flex justify-center w-full p-5">
								<i class="text-xl fa-solid fa-gear mr-2"></i> Configuration <i class="transform text-xl fa-solid fa-angle-down showDrop ml-2"></i>
							</button>
						</div>
						<div class="dropconfig hidden origin-top-right absolute right-0 w-full rounded-b-md shadow-lg bg-third bg-opacity-30 text-darkSoft overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
							<div>
                                <a href="{{route('employees.index')}}">
                                    <button class="block text-left font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 px-4" role="menuitem" tabindex="-1" id="menu-item-0"><i class="text-xl fa-solid fa-people-carry-box mr-2"></i> Employees</button>
                                </a>
								<a href="{{route('users.index')}}">
									<button class="block text-left font-semibold w-full h-14 hover:bg-third hover:text-lightSoft hover:bg-opacity-40 transition ease-in duration-200 px-4" role="menuitem" tabindex="-1" id="menu-item-0"><i class="text-xl fa-solid fa-users mr-2"></i> Users</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-span-1 grid grid-cols-3">
						<div class="col-span-1">
							<a href="{{route('auth.login')}}"><button class="font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button"><i class="text-xl fa-solid fa-person-walking-luggage"></i></button></a>
						</div>
						<div class="col-span-1 text-center">
							<a href="#"><button class="font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button"><i class="text-xl fa-solid fa-handshake-angle"></i></button></a>
						</div>
						<div class="col-span-1 text-center">
							<a href="#"><button class="font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button"><i class="text-xl fa-solid fa-circle-info"></i></button></a>
						</div>
					</div>
				</div>
			</div>
            <div class="w-full text-light text-center bg-darkSoft mt-10 fixed right-0 z-10 hidden pt-2 divide-y-2 divide-light divide-opacity-10" id="menu">
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" @if ($navBarTitle != "Home") href="{{route('administration.index')}}" @endif><button class="w-full font-semibold">Home</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" @if ($navBarTitle != "Asistances") href="{{route('administration.asistance')}}" @endif"><button class="w-full font-semibold">Assistance</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" @if ($navBarTitle != "Schedules") href="{{route('administration.schedules')}}" @endif><button class="w-full font-semibold">Schedules</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" @if ($navBarTitle != "Employees") href="{{route('employees.index')}}" @endif><button class="w-full font-semibold">Employees</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" @if ($navBarTitle != "Users") href="{{route('users.index')}}" @endif><button class="w-full font-semibold">Users</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" href="{{route('auth.login')}}"><button class="w-full font-semibold">log Out</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" href="#"><button class="w-full font-semibold">About</button></a>
                <a class="block hover:bg-thirdSoft hover:text-lightSoft py-4" href="#"><button class="w-full font-semibold">Help</button></a>
            </div>
		</header>
		<main class="mainContent pt-20 pb-8 md:px-20 px-8">
            <div class="text-4xl text-third font-semibold tracking-wide text-center">
                <label>Employee Management System</label>
            </div>
			@yield('content')
		</main>
		<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/all.min.js') }}"></script>
		<script src="{{ asset('js/select2.full.min.js') }}"></script>

		<script type="text/javascript">
			$(document).ready(function()
			{
				$(document).on('click','.btndrop',function()
                {
					hasClasBtn = $('.dropconfig').hasClass('hidden');
					if (hasClasBtn == true) {
						$('.dropconfig').slideDown().removeClass('hidden');
						$('.showDrop').addClass('rotate-180');
					} else {
						$('.dropconfig').slideUp().addClass('hidden');
						$('.showDrop').removeClass('rotate-180');
					}
				})
                .on('click','.menuButton',function(){
                    flagMenuButton  =   $('#menu').hasClass('hidden');
                    if (flagMenuButton == true)
                    {
                        $('#menu').slideDown().removeClass('hidden').addClass('block').slideDown();
                    }
                    else
                    {
                        $('#menu').slideUp().removeClass('block').addClass('hidden');
                    }
                })
				window.addEventListener("resize", function()
				{
					flagMenuButton  =   $('#menu').hasClass('block');
					if (flagMenuButton == true)
					{
						$('#menu').slideUp().removeClass('block').addClass('hidden');
					}
				});
			});
        </script>
		{{-- @if ($navBarTitle == "Log In") <script src="{{ asset('js/reloj.js') }}"></script> @endif --}}
        @yield('scripts')
	</body>
</html>
