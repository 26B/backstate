<svg viewBox="{{ $viewBox }}" fill="currentColor" {{ $attributes->merge(['class' => 'h-'.$size.' w-'.$size.($color ? ' text-'.$color : '')]) }}>
    @include($path)
</svg>
