@props(['href' => '', 'type' => 'button'])

@if($href)
    <a href="{{ url($href) }}">
@endif

<button
    type=" {{ $type }}"
    class="flex transition duration-150 ease-in-out w-full shadow-sm justify-center py-2 px-4 border border-gray-300 rounded-md
           bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400
           focus:outline-none focus:border-blue-300 focus:shadow-outline-blue"
>
    {{ $slot }}
</button>

@if($href)
    </a>
@endif
