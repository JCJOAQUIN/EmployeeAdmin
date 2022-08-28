<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lobster&family=Oxygen:wght@300;400;700&family=Roboto:wght@300;400&display=swap">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="css/select2.min.css">
        <title>EAS - {{$navBarTitle}}</title>
        @yield('css')
    </head>
    <body class="@if (isset($bgBody)) {{$bgBody}} @endif">
        <header>
            <div class="bg-primary grid md:grid-cols-12 grid-cols-2 w-full items-center">
                <div class="text-light text-lg text-center sm:ml-4 ml-12 font-semibold md:col-span-3 col-span-1">Administrator User{{-- {{$navBarTitle}} --}}</div>
                <div class="col-span-1 mr-8 grid justify-items-end p-2 md:hidden">
                    <button class="font-bold md:hidden text-4xl text-light"><i class="fa-solid fa-bars"></i></button>
                </div>
                <div class="text-light md:col-span-9 md:grid md:grid-cols-5 mr-4 md:text-md xs:text-sm hidden">
                    <div class="col-span-1">
                        <a @if ($navBarTitle != "Home") href="{{route('administration.index')}}" @endif><button class="@if($navBarTitle == "Home") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Home") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-home" title="Home"></i> Home</button></a>
                    </div>
                    {{-- <div class="col-span-1">
                        <a href="#"><button class="font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button"><i class="text-xl fa-solid fa-people-carry-box"></i> Employees</button></a>
                    </div> --}}
                    <div class="col-span-1">
                        <a @if ($navBarTitle != "Asistances") href="{{route('administration.asistance')}}" @endif><button class="@if($navBarTitle == "Asistances") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Asistances") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-circle-check"></i> Assistance</button></a>
                    </div>
                    {{-- <div class="col-span-1">
                        <a href="#"><button class="font-semibold w-full h-14 hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200" type="button"><i class="text-xl fa-solid fa-users"></i> Users</button></a>
                    </div> --}}
                    <div class="col-span-1">
                        <a @if ($navBarTitle != "Schedules") href="{{route('administration.schedules')}}" @endif><button class="@if($navBarTitle == "Schedules") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Schedules") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-calendar-plus"></i> Schedules</button></a>
                    </div>
                    <div class="col-span-1">
                        <a href="#"><button class="@if($navBarTitle == "Users" || $navBarTitle == "Employees") bg-darkSoft font-bold @endif font-semibold w-full h-14 @if($navBarTitle != "Users" || $navBarTitle != "Employees") hover:bg-third hover:bg-opacity-40 hover:text-lightSoft transition ease-in duration-200 @endif" type="button"><i class="text-xl fa-solid fa-gear"></i> Configuration</button></a>
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
        </header>
        <main class="mainContent">
            @yield('content')
        </main>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/all.min.js') }}"></script>

        {{-- @if ($navBarTitle == "Log In") <script src="{{ asset('js/reloj.js') }}"></script> @endif --}}
            @yield('scripts')
    </body>
</html>
