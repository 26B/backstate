@props(['labelId' => null, 'labelText' => null, 'items' => [], 'selectedItem' => null])

@php
    if ($selectedItem != null and !empty($items)) {
        $selectedItem = $items[0];
    }
@endphp
<div class="space-y-1" x-data="{ isOpen: false }">
    @if($labelId)
        <label id="{{ $labelId }}" class="block text-sm leading-5 font-medium text-gray-700">
            {{ $labelText }}
        </label>
    @endif
    <div class="relative">
        <span class="inline-block w-full rounded-md shadow-sm">
            {{ $selected }}
        </span>

        @if(!empty($items))
            <div
                class="absolute mt-1 w-full rounded-md bg-white shadow-lg"
                x-on:click.away="isOpen = false"
                x-show="isOpen"
                x-transition:enter="transition ease-out duration-100"
                x-transition:enter-start="transform opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="transform opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
            >
                <ul
                    tabindex="-1"
                    role="listbox"
                    aria-labelledby="{{ $labelId }}"
                    aria-activedescendant="listbox-item-3"
                    class="max-h-56 rounded-md py-1 text-base leading-6 shadow-xs overflow-auto
                        focus:outline-none sm:text-sm sm:leading-5"
                    x-data="{ selectedItemId: {{ $selectedItem->id }},
                              highlightedItemId: {{ $selectedItem->id }} }"
                >
                    {{ $slot }}
                </ul>
            </div>
        @endif
    </div>
</div>
