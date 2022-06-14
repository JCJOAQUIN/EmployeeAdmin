<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Login</title>
</head>
<body class="bg-darkDefault">
	<header>
		<div class="bg-primary grid grid-cols-3 w-full py-4">
			<div class="text-white md:text-xl text-md text-left ml-12">Login</div>
			<div class="text-white md:text-2xl sm:text-xl xs:text-sm text-center">Employee Admin Sistem</div>
			<div class="text-white md:text-xl text-md text-right mr-12 grid md:grid-cols-4 grid-cols-1">
				<div class="col-span-1 md:col-start-3 col-start-2 text-center">
					<a href="#"><button type="button">About</button></a>
				</div>
				<div class="col-span-1 md:col-start-4 col-start-2 text-center">
					<a href="#"><button type="button">Help</button></a>
				</div>
			</div>
		</div>
	</header>
    <div></div>
	<div class="grid grid-cols-11 mt-8">
		<div class="col-span-4 col-start-2 w-full id="left">
			<div id="enterprise-image" class="w-full h-60 text-center mb-8">
				imagen del empleado
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-gray-700">User</label>
				</div>
				<div>
					<input type="text" name="user" class="w-full h-12 rounded-md px-4" placeholder="Introduzca su nombre de usuario">
				</div>
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-gray-700">Password</label>
				</div>
				<div>
					<input type="password" name="user" class="w-full h-12 rounded-md px-4" placeholder="Introduzca su contraseña">
				</div>
			</div>
			<div class="buttons-sign block mt-4">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <div class="inline-block">
                            <div>
                                <button class="bg-green-600 w-40 h-10 rounded-md font-bold text-white">Firmar</button>
                            </div>
                            <div class="mt-2">
                                <a href="#" class="text-blue-600">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="inline-block">
                            <div>
                                <button class="font-bold w-40 h-10 text-gray-500">Registrarse</button>
                            </div>
                            <div class="mt-2">
                                <a href="#">Click aquí para recuperarla</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="col-span-4 col-start-7 rounded-md bg-white">
			<div class="w-full  text-center content-center rounded-md flex justify-center p-8">
				<div class="w-full rounded-md h-24 bg-gray-500 flex item-center">
                    <input type="text" class="digitalClock text-white bg-transparent text-center w-full text-5xl" value="9:00 AM">
				</div>
			</div>
		</div>
	</div>
</body>
</html>
