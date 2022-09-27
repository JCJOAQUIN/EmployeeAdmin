<div class="mb-4 w-full @if (isset($class)){{ $class }}@endif">
    <input class="w-full text-third h-10 rounded-md p-4 font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150 @if (isset($clasInput)) {{$clasInput}} @endif" @if (isset($attributeInput)) {!! $attributeInput !!} @endif/>
</div>
