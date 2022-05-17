<div x-data="{ isOpen: false, selected: @entangle($attributes->wire('model')) }" class="relative">
    <button x-on:click="isOpen = !isOpen" type="button" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label" {{ $attributes->merge(['class' => $border.' relative w-full bg-white border-gray-300 shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500 sm:text-sm']) }}>
        <span class="block truncate" x-text="selected !== null ? $refs['{{ $id }}_item_' + selected].firstElementChild.textContent.trim() : 'Select'"></span>
        <span class="absolute inset-y-0 right-0 flex items-center pr-1 pointer-events-none" aria-hidden="true">
            <x-backstate::icon name="solid.selector" size="5" color="gray-400" />
        </span>
    </button>

    <div
        x-show="isOpen"
        x-on:click.away="isOpen = false"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="absolute min-w-full mt-1 rounded-md bg-white shadow-lg z-10 hidden"
        x-bind:class="{ 'hidden': !isOpen }"
    >
        <ul tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-item-3" class="max-h-60 rounded-md py-1 text-base ring-1 ring-black ring-opacity-5 overflow-auto focus:outline-none sm:text-sm">
            @foreach ($items as $key => $item)
            <li
                x-on:click="selected = '{{ $getItemKey($item, $key) }}'; isOpen = false"
                x-ref="{{ $id }}_item_{{ $getItemKey($item, $key) }}"
                id="listbox-{{ $id }}_item_{{ $getItemKey($item, $key) }}"
                role="option"
                class="group relative text-gray-900 cursor-default select-none py-2 pl-8 pr-4 bg-white text-gray-900 hover:text-white hover:bg-primary-600"
            >
                <div class="block truncate" :class="{ 'font-semibold': selected == '{{ $getItemKey($item, $key) }}' }">
                    {{ $getItemLabel($item) }}
                </div>

                <span x-show="selected == '{{ $getItemKey($item, $key) }}'" class="absolute inset-y-0 left-0 flex items-center pl-1.5">
                    <x-backstate::icon name="solid.check" size="5" class="fill-current text-primary-600 group-hover:text-white"/>
                </span>
            </li>
            @endforeach
        </ul>
    </div>
</div>
