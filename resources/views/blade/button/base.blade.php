@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $getBaseClass()]) }}>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $getBaseClass()]) }}>
@endif

    {{ $slot }}

@if ($href)
    </a>
@else
    </button>
@endif
