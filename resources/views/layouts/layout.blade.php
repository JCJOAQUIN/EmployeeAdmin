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
			<div></div>
			<div class="bg-primary grid grid-cols-3 w-full items-center">
				<div class="text-light md:text-xl text-md text-left ml-12 font-semibold">Login</div>
				<div class="text-light md:text-2xl sm:text-xl xs:text-sm text-center font-semibold">Employee Admin Sistem</div>
				<div class="text-light md:text-xl text-md text-right mr-12 grid md:grid-cols-4 grid-cols-1">
					<div class="col-span-1 md:col-start-3 col-start-2 text-center">
						<a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button">About</button></a>
					</div>
					<div class="col-span-1 md:col-start-4 col-start-2 text-center">
						<a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button">Help</button></a>
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
