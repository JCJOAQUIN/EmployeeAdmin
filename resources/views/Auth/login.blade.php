<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="bg-blue-600 grid grid-cols-3 w-full py-4">
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
    <div class="grid grid-cols-2">
        <div class="col-span-1 h-screen m-8" id="left">
            <div id="enterprise-image" class="w-full h-1/2 text-center border-gray-500 border-2 mb-12">
                imagendel empleado
            </div>
            <div class="user-form block">
                <div>
                    <label>User</label>
                </div>
                <div>
                    <input type="text" name="user" placeholder="Introduzca su nombre de usuario">
                </div>
            </div>
            <div class="user-form block">
                <div>
                    <label>Password</label>
                </div>
                <div>
                    <input type="text" name="user" placeholder="Introduzca su contraseña">
                </div>
            </div>
            <div class="buttons-sign block">
                <div class="inline-block">
                    <div>
                        <button>Firmar</button>
                    </div>
                    <div>
                        <label class="text-blue-600">¿Olvidaste tu contraseña?</lab>
                    </div>
                </div>
                <div class="inline-block">
                    <div>
                        <button>Registrarse</button>
                    </div>
                    <div>
                        <a href="#">Click aquí para recuperarla</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
        </div>
    </div>
</body>
</html>
