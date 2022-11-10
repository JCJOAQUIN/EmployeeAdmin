<div class="mb-4 w-full @if (isset($class)){{ $class }}@endif">
    <button class="@if (isset($classButton)){{ $classButton }}@endif" @if (isset($attributeButton)) {{ $attributeButton }} @endif> @if (isset($labelButton)) {{ $labelButton }} @endif</button>
</div>
