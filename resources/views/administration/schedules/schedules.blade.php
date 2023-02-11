@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Schedules";
@endphp

@section('content')
    <div class="mt-12 flex justify-center space-x-8">
        <a href="{{route('schedules.create')}}">
            <button class="createEmployee w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold">Create</button>
        </a>
        <a href="{{route('schedules.assign')}}">
            <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold">Assign</button>
        </a>
    </div>
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
