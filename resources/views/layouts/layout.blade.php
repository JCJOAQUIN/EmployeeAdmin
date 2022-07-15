<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Login @yield('title')</title>
</head>
<body class="bg-light" onload="mostrarReloj()">
	@section('navbar')
		<header>
			<div class="bg-primary grid grid-cols-7 w-full items-center">
				<div class="text-light md:text-xl text-md text-left md:ml-12 sm:ml-8 xs:ml-4 ml-12 font-semibold col-span-2">Login</div>
				<div class="text-light md:text-2xl sm:text-xl xs:text-md text-center font-bold col-span-3">Employee Admin Sistem</div>
				<div class="text-light md:text-xl text-md text-right md:mr-12 sm:mr-8 xs:mr-4 mr-12 grid md:grid-cols-4 col-span-2">
					<div class="col-span-1 col-start-3 text-center">
						<a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 md:text-xl sm:text-md xs:text-sm text-xs" type="button">About</button></a>
					</div>
					<div class="col-span-1 col-start-4 text-center">
						<a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 md:text-xl sm:text-md xs:text-sm text-xs" type="button">Help</button></a>
					</div>
				</div>
			</div>
		</header>
	@show
	<main class="mainContent">
		@yield('content')
	</main>
    <script src="http://localhost/employeeadmin/resources/js/reloj.js"></script>
</body>
</html>
