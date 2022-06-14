<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>Login</title>
</head>
<body class="bg-light">
	<header>


        <div></div>
		<div class="bg-primary grid grid-cols-3 w-full py-4">
			<div class="text-light md:text-xl text-md text-left ml-12 font-semibold">Login</div>
			<div class="text-light md:text-2xl sm:text-xl xs:text-sm text-center font-semibold">Employee Admin Sistem</div>
			<div class="text-light md:text-xl text-md text-right mr-12 grid md:grid-cols-4 grid-cols-1">
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
	<div class="grid grid-cols-11 mt-12">
		<div class="col-span-4 col-start-2 w-full id="left">
			<div id="enterprise-image" class="w-full h-60 text-center mb-8">

			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-darkSoft">User</label>
				</div>
				<div>
					<input type="text" name="user" class="w-full bg-lightSoft h-12 rounded-md px-4" placeholder="Introduzca su nombre de usuario">
				</div>
			</div>
			<div class="user-form block mt-4">
				<div>
					<label class="font-bold text-lg text-darkSoft">Password</label>
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
                                <button class="btnSign bg-secondary w-40 h-10 rounded-md font-bold text-lg text-light">Sign</button>
                            </div>
                            <div class="mt-2">
                                <a href="#" class=" text-darkSoft font-semibold">Forget your password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="inline-block">
                            <div>
                                <button class="btnRegister font-bold w-40 h-10 text-darkSoft text-lg">Register</button>
                            </div>
                            <div class="mt-2 text-primary font-semibold">
                                <a href="#">Click here to restore!</a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<div class="col-span-4 col-start-7 rounded-md bg-lightSoft">
			<div class="w-full  text-center content-center rounded-md flex justify-center p-8">
				<div class="w-full rounded-md h-24 bg-light flex item-center">
                    <input type="text" class="digitalClock text-third bg-transparent text-center w-full text-5xl font-semibold" value="9:00 AM">
				</div>
			</div>
		</div>
	</div>
    {{-- <script src="{{ asset('js/jquery-ui.js') }}"></script> --}}
</body>
</html>
