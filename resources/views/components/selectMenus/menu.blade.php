@props(['items' => []])
<ul
    tabindex="-1"
    role="listbox"
    aria-labelledby="{{ $labelId }}"
    aria-activedescendant="listbox-item-3"
    class="max-h-56 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto
            focus:outline-none sm:text-sm sm:leading-5"
>
    {{ $slot }}
</ul>
