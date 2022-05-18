@props(['href', 'isActive' => false, 'text'])

@php
$activeClass = ' border-primary-500 text-gray-900 focus:border-primary-700';
$inactiveClass = ' border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' .
                  ' focus:text-gray-700 focus:border-gray-300';
@endphp
<a
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'inline-flex items-center px-1 pt-1 border-b-2' .
                                      ' text-sm font-medium leading-5 focus:outline-none' .
                                      ' focus:border-primary-700 transition duration-150' .
                                      ' ease-in-out' .
                                      ($isActive ? $activeClass : $inactiveClass)
    ]) }}
>
    {{ $text }}
</a>
