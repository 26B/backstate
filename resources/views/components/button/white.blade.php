<x-backstate::button.base type="{{ $type }}" href="{{ $href }}" size="{{ $size }}" color="{{ $color }}" {{ $attributes->merge(['class' => 'border-gray-300 shadow-sm text-gray-700 bg-white hover:bg-gray-50']) }}>
    {{ $slot }}
</x-backstate::button.base>
