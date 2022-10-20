@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Schedules";
@endphp

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
