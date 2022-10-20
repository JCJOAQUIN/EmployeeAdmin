<div class="col-span-1">
    <label class="text-darkSoft font-semibold @if(isset($classLabel)) {{$classLabel}} @endif" @if (isset($attributeLabel)){{!!$attributeLabel!!}} @endif>@if (isset($label)) {{$label}} @else {{$slot}} @endif</label>
    <select class="relativetext-third h-10 rounded-md font-semibold focus:outline-none focus:ring-2 ring-primarySoft ring-1 transition ease-in duration-150 @if(isset($classSelect)) {{$classSelect}} @endif" @if (isset($attributeSelect)) {!! $attributeSelect !!} @endif">
        @if (isset($options))
            @foreach ($options as $option)
                <option value={{$option["value"]}} @isset($option['selected']) selected @endisset>{{$option["content"]}}</option>
            @endforeach
        @endif
    </select>
</div>
