<div class="mb-4 w-full @if (isset($classCombo)){{ $classCombo }}@endif">
    <label class="text-darkSoft font-semibold @if(isset($classLabel)) {{$classLabel}} @endif" @if (isset($attributeLabel)){{!!$attributeLabel!!}} @endif>@if (isset($label)) {{$label}} @else {{$slot}} @endif</label>
    <input class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150 @if (isset($clasInput)) {{$clasInput}} @endif" @if (isset($attributeInput)) {!! $attributeInput !!} @endif/>
</div>
