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

    <body class="{{$bgBody}}" @if ($navBarTitle == "Log In") onload="mostrarReloj()" @endif>
            <header>
                <div class="bg-primary grid grid-cols-7 w-full items-center">
                    <div class="text-light md:text-xl text-md text-left md:ml-12 sm:ml-8 xs:ml-4 ml-12 font-semibold col-span-2">{{$navBarTitle}}</div>
                    <div class="text-light md:text-2xl sm:text-xl xs:text-md text-center font-bold col-span-3">Employee Management System</div>
                    <div class="text-light md:text-xl text-md text-right md:mr-12 sm:mr-8 xs:mr-4 mr-12 grid md:grid-cols-4 col-span-2">
                        <div class="col-span-1 col-start-3 text-center">
                            <a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 md:text-xl sm:text-md xs:text-sm text-xs" type="button">About</button></a>
                        </div>
                        <div class="col-span-1 col-start-4 text-center">
                            <a href="#"><button class="w-full h-12 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 md:text-xl sm:text-md xs:text-sm text-xs" type="button"><i class="fa-solid fa-circle-question"></i></button></a>
                        </div>
                    </div>
                </div>
            </header>
        <main class="mainContent">
            @yield('content')
        </main>

        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>
		<script src="{{ asset('js/select2.full.min.js') }}"></script>
        @if ($navBarTitle == "Log In") <script src="{{ asset('js/reloj.js') }}"></script> @endif
        @yield('scripts')
    </body>
</html>
