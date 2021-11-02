<div x-data="{ selected: @entangle($attributes->wire('model')) }" x-init="selected = !Array.isArray(selected) ? [] : selected;" class="rounded-lg overflow-hidden border border-gray-300 shadow divide-y-2 divide-gray-200 sm:divide-y-0 sm:grid sm:grid-cols-2 sm:gap-px sm:divide-x-2">
    <div class="max-h-60 p-4 text-base overflow-auto focus:outline-none sm:text-sm">
        @if ($hasSearch)
        <backstate:searchbar class="mb-3" wire:model.defer="{{ $wireSearch }}" placeholder="{{ $searchPlaceholder }}" />
        @endif

        <div class="text-gray-700 font-medium text-sm mb-1">
            Available {{ $itemsName }}
        </div>
        <div class="divide-y rounded border">
            @foreach ($items as $key => $item)
            <div>
                <label class="flex p-2 rounded" x-bind:class="{ 'bg-primary-50': selected.includes('{{ $getItemKey($item, $key) }}') }">
                    <input
                        x-model="selected"
                        value="{{ $getItemKey($item, $key) }}"
                        type="checkbox"
                        class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md text-primary-600 checked:border-transparent focus:outline-none focus:ring-primary-600"
                    >
                    <div class="block truncate ml-2">
                        {{ $getItemLabel($item) }}
                    </div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="max-h-60 p-4 text-base overflow-auto focus:outline-none sm:text-sm">
        <div class="text-gray-700 font-medium text-sm mb-1">
            Selected {{ $itemsName }}
        </div>

        <div x-bind:class="{ 'hidden': selected.length }">
            No {{ $itemsName }} selected
        </div>

        <div x-bind:class="{ 'divide-y': selected.length > 1 }">
            @foreach ($items as $key => $item)
            <div x-bind:class="{ 'hidden': !selected.includes('{{ $getItemKey($item, $key) }}') }">
                <label class="p-2 flex rounded bg-primary-50">
                    <input
                        x-model="selected"
                        value="{{ $getItemKey($item, $key) }}"
                        type="checkbox"
                        class="form-tick appearance-none h-6 w-6 border border-gray-300 rounded-md text-primary-600 checked:border-transparent focus:outline-none focus:ring-primary-600"
                    >
                    <div class="block truncate ml-2">
                        {{ $getItemLabel($item) }}
                    </div>
                </label>
            </div>
            @endforeach
        </div>
    </div>
</div>
