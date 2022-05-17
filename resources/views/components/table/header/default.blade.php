<th scope="col" {{ $attributes->merge($extraAttributes)->merge(['class' => 'px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider']) }}>
    <div class="{{ $isSortable ? 'flex' : ''}}">
        <div>
            {{ $title }}
        </div>

        @if ($isSortable)
        <button wire:click="sortByColumnKey({{ $key }})" class="text-gray-{{ $sortDirection ? '700' : '400' }} hover:text-gray-500 ml-1">
            @if ($sortDirection === 'desc')
            <x-backstate::icon name="solid.sort-descending" size="4"/>
            @else
            <x-backstate::icon name="solid.sort-ascending" size="4"/>
            @endif
        </button>
        @endif
    </div>
</th>
