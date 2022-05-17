@props(['newXData' => true])

<div
    {{ $attributes->merge(['class' => 'relative inline-block']) }}
    {!! $newXData ? 'x-data="{ isOpen: false }"' : '' !!}
>
    <div x-on:click="isOpen = !isOpen">
        {{ $select }}
    </div>
    <div
        class="py-1 origin-top-right absolute w-56 right-0 mt-2 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
        x-cloak
        x-on:click.away="isOpen = false"
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
