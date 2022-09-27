@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Employees";
@endphp
@section('css')
<style>
    /* From uiverse.io by @Z-C-Code */
@keyframes square-animation {
    0% {
     left: 0;
     top: 0;
    }

    10.5% {
     left: 0;
     top: 0;
    }

    12.5% {
     left: 32px;
     top: 0;
    }

    23% {
     left: 32px;
     top: 0;
    }

    25% {
     left: 64px;
     top: 0;
    }

    35.5% {
     left: 64px;
     top: 0;
    }

    37.5% {
     left: 64px;
     top: 32px;
    }

    48% {
     left: 64px;
     top: 32px;
    }

    50% {
     left: 32px;
     top: 32px;
    }

    60.5% {
     left: 32px;
     top: 32px;
    }

    62.5% {
     left: 32px;
     top: 64px;
    }

    73% {
     left: 32px;
     top: 64px;
    }

    75% {
     left: 0;
     top: 64px;
    }

    85.5% {
     left: 0;
     top: 64px;
    }

    87.5% {
     left: 0;
     top: 32px;
    }

    98% {
     left: 0;
     top: 32px;
    }

    100% {
     left: 0;
     top: 0;
    }
   }

   .loader {
    position: relative;
    width: 96px;
    height: 96px;
    transform: rotate(45deg);
   }

   .loader-square {
    position: absolute;
    top: 0;
    left: 0;
    width: 28px;
    height: 28px;
    margin: 2px;
    border-radius: 0px;
    background: rgba(8, 145, 178,1);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    animation: square-animation 10s ease-in-out infinite both;
   }

   .loader-square:nth-of-type(0) {
    animation-delay: 0s;
   }

   .loader-square:nth-of-type(1) {
    animation-delay: -1.4285714286s;
   }

   .loader-square:nth-of-type(2) {
    animation-delay: -2.8571428571s;
   }

   .loader-square:nth-of-type(3) {
    animation-delay: -4.2857142857s;
   }

   .loader-square:nth-of-type(4) {
    animation-delay: -5.7142857143s;
   }

   .loader-square:nth-of-type(5) {
    animation-delay: -7.1428571429s;
   }

   .loader-square:nth-of-type(6) {
    animation-delay: -8.5714285714s;
   }

   .loader-square:nth-of-type(7) {
    animation-delay: -10s;
   }
</style>
@endsection
@section('content')
<div class="mt-12 flex justify-center space-x-8">
    <a href="{{route('employees.create')}}">
        <button class="createEmployee w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold">Create</button>
    </a>
    <a href="{{route('employees.search')}}">
        <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold">Search</button>
    </a>
</div>
@endsection

@section('scripts')

<script src="js/sweetalert2.all.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $(document).on('click','.createEmployee',function()
            {
                swal.fire({
                    imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                    imageWidth: 150,
                    showConfirmButton: false,
                    timer: 1500
                });
            });
        });
    </script>
@endsection
