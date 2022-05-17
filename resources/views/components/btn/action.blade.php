@props(['color', 'type' => 'button'])

<button
    type="{{ $type }}"
    class="flex transition duration-150 ease-in-out px-2 py-1.5 rounded-md text-sm leading-5 font-medium text-{{ $color }}-800
           hover:bg-{{ $color }}-100 focus:outline-none focus:bg-{{ $color }}-100"
>
    {{ $slot }}
</button>
