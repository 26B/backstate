<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" {{ $attributes->merge(['class' => 'h-'.$size.' w-'.$size.($color ? ' text-'.$color : '')]) }}>
    @include($path)
</svg>
