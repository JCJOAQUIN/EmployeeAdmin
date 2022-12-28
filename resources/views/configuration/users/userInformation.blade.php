@extends('layouts.menu_admin')

@php
	$navBarTitle	=	"Users";
	$bgBody			=	"bg-lightSoft";
@endphp

@section('content')
    <div class="mx-4">
        <div class="flex mt-4 p-2">
            <a href="{{route('users.index')}}">
                <button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out">
                    <i class="w-6 fa-solid fa-angles-left"></i> Back
                </button>
            </a>
        </div>
        <div class="mt-4 flex justify-center space-x-8">
            <a href="{{route('users.create')}}">
                <button class="createUser w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Create</button>
            </a>
            <a href="{{route('users.search')}}">
                <button class="w-32 p-2 bg-third hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Search</button>
            </a>
        </div>
        <div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
            <i class="fa-solid fa-address-card"></i> User Information
        </div>
    </div>
    <div class="flex justify-center lg:text-base md:text-sm sm:text-xs text-sm mt-12 mx-4">
        <div class="lg:w-4/5 w-full border-thirdSoft rounded-md p-4 shadow-md">
            <div class="grid md:grid-cols-6 grid-cols-1 border-b-2 pb-2 md:gap-0 gap-2">
                <div class="col-span-1 grid place-content-center">
                    <div class="md:w-14 w-28 md:h-14 h-28 border rounded-full"></div>
                </div>
                <div class="col-span-4 grid place-content-center">@component('components.labels.label', ["label" => $requests->fullName()]) @endcomponent</div>
                <div class="col-span-1 grid place-content-center">
                    @if ($requests->deleted_at !="")
                        <a href="{{route('users.active',$requests->id)}}">
                            <button class="px-4 py-1 rounded-xl bg-secondary text-white font-semibold">Active</button>
                        </a>
                    @endif
                </div>
            </div>
            <div class="grid sm:grid-cols-2 grid-cols-1 py-4 md:px-0 gap-2">
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Gender:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->gender]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Birthday:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->birthday]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "CURP:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->curp]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "RFC:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->rfc]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "NSS:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->nss]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Phone:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->phone]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Email address:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->email]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "State / Province:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->state]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Township:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->township]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "City:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->city]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "ZIP / Postal code:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->postal_code]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "Address:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->address]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "User:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->user]) @endcomponent
                </div>
                <div class="col-span-1 grid md:grid-cols-2 grid-cols-2">
                    @component('components.labels.label', ["classLabel" => "text-third font-bold", "label" => "User Kind:"]) @endcomponent
                    @component('components.labels.label', ["label" => $requests->user_kind == '0' ? 'Employee' : 'Administrator']) @endcomponent
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script>
        swal.fire({
            imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
            showConfirmButton: false,
            timer: 600,
        });
    </script>
@endsection
