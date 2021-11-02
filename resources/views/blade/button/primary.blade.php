<backstate:button.base type="{{ $type }}" href="{{ $href }}" size="{{ $size }}" color="{{ $color }}" {{ $attributes->merge(['class' => 'border-transparent shadow-sm text-white bg-' . $color . '-600 hover:bg-' . $color . '-700']) }}>
    {{ $slot }}
</backstate:button.base>
