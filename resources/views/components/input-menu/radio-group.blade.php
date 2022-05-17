<fieldset x-data="{ selected: @entangle($attributes->wire('model')).defer }">
    @if ($attributes->has('legend'))
    <legend class="sr-only">
        {{ $attributes->get('legend') }}
    </legend>
    @endif

    <div class="bg-white rounded-md -space-y-px">
        @foreach ($items as $key => $item)
        <label :class="{'bg-primary-50 border-primary-200 z-10': selected == '{{ $getItemKey($item, $key) }}', 'border-gray-200': selected != '{{ $getItemKey($item, $key) }}' }" class="border-gray-200 relative border p-4 flex cursor-pointer {{ $loop->first ? 'rounded-tl-md rounded-tr-md' : '' }} {{ $loop->last ? 'rounded-bl-md rounded-br-md' : '' }}">
            <input x-model="selected" type="radio" value="{{ $getItemKey($item, $key) }}" class="h-4 w-4 mt-0.5 cursor-pointer text-primary-600 border-gray-300 focus:ring-primary-500">
            <div class="ml-3 flex flex-col">
                <span :class="{'text-primary-900': selected == '{{ $getItemKey($item, $key) }}', 'text-gray-900': selected != '{{ $getItemKey($item, $key) }}' }" class="text-gray-900 block text-sm font-medium">
                    {{ $getItemLabel($item) }}
                </span>
                <span :class="{'text-primary-700': selected == '{{ $getItemKey($item, $key) }}', 'text-gray-500': selected != '{{ $getItemKey($item, $key) }}' }" class="text-gray-500 block text-sm">
                    {{ $getItemField($item, 'description') ?? '' }}
                </span>
            </div>
        </label>
        @endforeach
    </div>
</fieldset>
