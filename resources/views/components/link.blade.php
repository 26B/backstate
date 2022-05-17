@props(['href'])

<a
    href="{{ url($href) }}"
    class="font-medium text-primary-600 hover:text-primary-500 focus:outline-none
           focus:underline transition ease-in-out duration-150"
>
    {{ $slot }}
</a>
