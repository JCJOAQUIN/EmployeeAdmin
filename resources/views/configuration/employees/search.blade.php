@extends('layouts.menu_admin')
@php
	$navBarTitle	=	"Employees";
@endphp

@section('content')
    <div class="mx-4" id="formRegisterEmployee">
        <form>
            @csrf
            {{$requests}}
            <div class="flex mt-4 p-2">
                <a href="{{route('employees.index')}}">
                    <button type="button" class="py-2 px-4 rounded-full text-lg text-light font-semibold bg-darkSoft hover:text-lightSoft hover:bg-thirdSoft transition duration-300 ease-in-out">
                        <i class="w-6 fa-solid fa-angles-left"></i> Back
                    </button>
                </a>
            </div>
			<div class="mt-4 flex justify-center space-x-8">
				<a href="{{route('employees.create')}}">
					<button class="createEmployee w-32 p-2 bg-primary hover:bg-primarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Create</button>
				</a>
				<a href="{{route('employees.search')}}">
					<button class="w-32 p-2 bg-third hover:bg-secondarySoft rounded-full text-lightSoft hover:text-light font-semibold transition duration-300 ease-in-out" type="button">Search</button>
				</a>
			</div>
			<div class="text-2xl font-semibold pb-1 pl-2 mt-8 border-b-4 border-primary text-teal-600">
				<i class="fa-solid fa-users-viewfinder"></i> Search Employee
			</div>
            <div class="grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-x-8 mt-8">
                @php
                    $userSearch =   isset($user) ? $user : "";
                @endphp
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Clabe:", "attributeInput" => "name=\"clabe\" placeholder=\"Write the Clabe\" value=\"".(isset($clabe) ? $clabe : '')."\""]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Alias:", "attributeInput" => "name=\"alias\" placeholder=\"Write the Alias\" value=\"".(isset($alias) ? $alias : '')."\""]) @endcomponent
                @php
					$options = collect();
                    $userData   =   App\Models\User::get();
					foreach ($userData as $users)
					{
                        if ($userSearch !="" && $userSearch == $users->id)
                        {
                            $options    =   $options->concat([["value" => $users->id, "content" => $users->name, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value"  =>  $users->id, "content" => $users->name]]);
                        }
					}
				@endphp
				@component('components.inputs.select', ["label" => "User", "options" => $options, "attributeSelect" => "name=\"user\" multiple=\"multiple\"", "classSelect" => "js-user"]) @endcomponent
                @component('components.inputs.inputCombo', ["classCombo" => "col-span-1", "label" => "Name:", "attributeInput" => "name=\"name\" placeholder=\"Write the Name\" value=\"".(isset($name) ? $name : '')."\""]) @endcomponent
                @php
					$options = collect();
					$areasData =   App\Models\Area::get();
					foreach ($areasData as $areaData)
					{
                        if ($area==$areaData->id)
                        {
                            $options    =   $options->concat([["value" => $areaData->id, "content" => $areaData->name, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value" => $areaData->id, "content" => $areaData->name]]);
                        }
					}
				@endphp
				@component('components.inputs.select', ["label" => "Area:", "options" => $options, "attributeSelect" => "name=\"area\" multiple=\"multiple\"", "classSelect" => "js-area"]) @endcomponent
                @php
                    $options         =   collect();
					$departmentsData =   App\Models\Department::get();
                    foreach ($departmentsData as $departmentData)
                    {
                        if (isset($department) && $department == $departmentData->id)
                        {
                            $options    =   $options->concat([["value"  =>  $departmentData->id, "content" => $departmentData->name, "selected" => "selected"]]);
                        }
                        else
                        {
                            $options    =   $options->concat([["value"  =>  $departmentData->id, "content" => $departmentData->name]]);
                        }
                    }
                @endphp
				@component('components.inputs.select', ["label" => "Department:", "options" => $options, "attributeSelect" => "name=\"department\" multiple=\"multiple\"", "classSelect" => "js-department"]) @endcomponent
            </div>
            <div class="text-center">
                <button class="search mt-8 w-24 h-10 bg-teal-500 hover:bg-teal-600 hover:text-light rounded-md text-lightSoft font-semibold"><i class="fa-solid fa-search"></i> Search</button>
            </div>
            <div class="bg-thirdSoft lg:text-sm text-xs md:mt-8 mt-6 rounded-md bg-opacity-10 font-semibold md:p-8 p-2 md:block hidden">
                <div class="grid grid-cols-12 text-center p-2 bg-teal-800 text-lightSoft rounded-md mb-2">
                    <div class="col-span-1">ID</div>
                    <div class="col-span-1">Clabe</div>
                    <div class="col-span-1">Alias</div>
                    <div class="md:col-span-3">Name</div>
                    <div class="col-span-2">Area</div>
                    <div class="col-span-2">Department</div>
                    <div class="col-span-1">Status</div>
                    <div class="col-span-1">Actions</div>
                </div>

                @foreach ($requests as $request)
                    @php
                        $areaData       = App\Models\Area::find($request->area);
                        $departmentData = App\Models\Department::find($request->department);
                    @endphp
                    <div class="grid grid-cols-12 text-center p-2 md:border-b-2 border-solid border-teal-800 text-darkSoft employeeRow">
                        <div class="col-span-1 grid place-items-center"> {{isset($request->id) ? $request->id : "---"}} </div>
                        <div class="col-span-1 grid place-items-center"> {{isset($request->clabe) ? $request->clabe : "---"}} </div>
                        <div class="col-span-1 grid place-items-center"> {{isset($request->alias) ? $request->alias : '---'}} </div>
                        <div class="col-span-3 grid place-items-center"> {{isset($request->user) ? $request->user->fullName() : "---"}} </div>
                        <div class="col-span-2 grid place-items-center"> {{$areaData!="" ? $areaData->name : "---"}} </div>
                        <div class="col-span-2 grid place-items-center"> {{$departmentData!="" ? $departmentData->name : "---"}} </div>
                        <div class="col-span-1 grid place-items-center rounded-md text-white {{isset($request->deleted_at) && ($request->deleted_at !="") ? 'bg-red-500' : "bg-green-600"}}">
                            {{isset($request->deleted_at) &&  ($request->deleted_at !="") ? "Suspended" : "Active"}}
                        </div>
                        <div class="col-span-1 space-x-1">
                            <a href="{{route('employees.view',$request->id)}}">
                                <button type="button" title="View Employee information"><i class="text-base py-1 fa-solid fa-address-card text-third hover:text-thirdSoft"></i></button>
                            </a>
                            @if ($request->deleted_at =="")
                                <a href="{{route('employees.edit',$request->id)}}">
                                    <button type="button" title="Edit Employee"><i class="text-base py-1 fa-solid fa-user-pen text-primary hover:text-primarySoft"></i></button>
                                </a>
                            @endif
                           <a href="{{route('employees.suspend',$request->id)}}">
                                <button class="disableEmployee {{ $request->deleted_at !="" ? 'hidden' : "" }}" title="Suspend Employee" type="button"><i class="text-base py-1 fa-solid fa-user-slash text-dangerDark hover:text-dangerSoft"></i></button>
                            </a>
                            <a href="{{route('employees.active',$request->id)}}">
                                <button class="enableEmployee {{ $request->deleted_at =="" ? 'hidden' : "" }}" title="Active Employee" type="button"><i class="text-base py-1 fa-solid fa-user-check text-secondaryDark hover:text-secondarySoft"></i></button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="bg-thirdSoft md:mt-8 mt-6 rounded-md bg-opacity-10 text-sm md:p-8 p-2 md:hidden block">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 p-3">
                    @foreach ($requests as $request)
                        <div class="bg-white p-4 rounded-md">
                            <div class="w-full text-center border-b-2 border-gray-500 mb-4 pb-2">
                                @component('components.labels.label', ["label" => isset($request->user) ? $request->user->fullName() : "---", "classLabel" => "font-bold"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "ID:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->id) ? $request->id : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Clabe:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->clabe) ? $request->clabe : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Alias:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->alias) ? $request->alias : '---']) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Area:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->gender) ? $request->gender : "---"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Department:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => $request->deleted_at !="" ? "Suspended" : "Active"]) @endcomponent
                            </div>
                            <div class="grid grid-cols-2">
                                @component('components.labels.label', ["label" => "Status:", "classLabel" => "font-bold"]) @endcomponent
                                @component('components.labels.label', ["label" => isset($request->nss) ? $request->nss : "---"]) @endcomponent
                            </div>
                            <div class="w-full text-center border-t-2 border-gray-500 mb-4 pt-4 space-x-4 employeeRow">
                                <a href="{{route('employees.view',$request->id)}}"><button type="button" title="View Employee information"><i class="text-lg fa-solid fa-address-card text-third hover:text-thirdSoft"></i></button></a>
                                @if ($request->deleted_at =="")
                                    <a href="{{-- {{route('employee.edit',$request->id)}} --}}"><button type="button" title="Edit Employee"><i class="text-lg fa-solid fa-user-pen text-primary hover:text-primarySoft"></i></button></a>
                                @endif
                               <a href="{{route('employees.suspend',$request->id)}}">
                                    <button class="disableEmployeeSM {{ $request->deleted_at !="" ? 'hidden' : "" }}"  title="Suspend Employee" type="button"><i class="text-lg fa-solid fa-user-slash text-dangerDark hover:text-dangerSoft"></i></button>
                                </a>
                               <a href="{{route('employees.active',$request->id)}}">
                                    <button class="enableEmployeeSM {{ $request->deleted_at =="" ? 'hidden' : "" }}" title="Active Employee" type="button"><i class="text-lg fa-solid fa-user-check text-secondaryDark hover:text-secondarySoft"></i></button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-4">
                {{$requests->links()}}
            </div>
        </form>
	</div>
@endsection

@section('scripts')
    @if (!session('alert'))
        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
        <script>
            swal.fire({
                imageUrl: '{{ asset(getenv('LOADING_IMG')) }}',
                showConfirmButton: false,
                timer: 600,
            });
        </script>
    @endif
    <script type="text/javascript">

        $(document).ready(function()
        {
            $('.js-user').select2({
				placeholder         :   "Select an User",
				language            :   "en",
				maximumSelectionLength  : 1,
				width               : "100%"
			})
            $('.js-area').select2({
				placeholder         :   "Select an Area",
				language            :   "en",
				maximumSelectionLength  : 1,
                minimumInputLength      : 2,
				width               : "100%"
			})
            $('.js-department').select2({
				placeholder         :   "Select a Department",
				language            :   "en",
				maximumSelectionLength  : 1,
                minimumInputLength      : 2,
				width               : "100%"
			})
        });
    </script>
@endsection
