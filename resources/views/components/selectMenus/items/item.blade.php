@props(['item'])

<li
    id="{{ 'listbox-item-' $item->id }}"
    class="text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9"
    :class="{ 'text-white bg-indigo-600': highlightedItemId === {{ $item->id }},
              'text-cool-gray-900': highlightedItemId !== {{ $item->id }} }"
    role="option"
    x-on:click="selectedItemId= {{ $item->id }}"
    x-on:enter="highlightedItemId= {{ $item->id }}"
>
    {{ $slot }}

    <span
        class="absolute inset-y-0 right-0 flex items-center pr-4"
        :class="{ 'text-white': highlightedItemId === {{ $item->id }},
                  'text-indigo-600': highlightedItemId !== {{ $item->id }} }"
        x-show="selectedItemId === {{ $item->id }}"
    >
        <x-icons.check />
    </span>
</li>
