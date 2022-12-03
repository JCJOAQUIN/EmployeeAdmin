@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Users";
@endphp

@section('content')
    <div class="mt-12 flex justify-center space-x-8">
        <a href="{{route('users.create')}}">
            <button class="createUser w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold">Create</button>
        </a>
        <a href="{{route('users.search')}}">
            <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold">Search</button>
        </a>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script type="text/javascript">
        swal.fire({
            imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
            showConfirmButton: false,
            timer: 600,
        });
    </script>
@endsection
