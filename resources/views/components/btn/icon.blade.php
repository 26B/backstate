@props(['color' => 'gray', 'type' => 'button'])

<button
    type="{{ $type }}"
    class="flex transition duration-150 ease-in-out p-1 border-2 border-transparent text-{{ $color }}-400 rounded-full
           hover:text-{{ $color }}-500 focus:outline-none focus:text-{{ $color }}-500
           focus:bg-{{ $color }}-100"
>
    {{ $slot }}
</button>
