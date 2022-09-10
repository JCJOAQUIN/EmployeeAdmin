@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Employees";
@endphp
@section('content')
<div class="mt-12 flex justify-center space-x-8">
    <a href="{{route('employees.create')}}">
        <button class="w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold">Create</button>
    </a>
    <a href="{{route('employees.search')}}">
        <button class="w-32 p-2 bg-secondary hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold">Search</button>
    </a>
    @component('components.inputs.input-text', ["classEx" => "", "attributeEx" => ""])
        @slot('attributeEx')
        @endslot
    @endcomponent
</div>
@endsection
