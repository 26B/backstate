<x-backstate::button.base type="{{ $type }}" href="{{ $href }}" size="{{ $size }}" color="{{ $color }}" {{ $attributes->merge(['class' => 'border-transparent text-' . $color . '-700 bg-' . $color . '-100 hover:bg-' . $color . '-200']) }}>
    {{ $slot }}
</x-backstate::button.base>
