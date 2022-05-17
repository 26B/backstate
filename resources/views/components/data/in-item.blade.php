<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
        {{ $label }}

        @if ($attributes->has('required'))
        <span class="text-red-500">
            *
        </span>
        @endif
    </label>

    <div class="mt-1 sm:mt-0 sm:col-span-2">
        @if ($slot->isNotEmpty())
            {{ $slot }}
        @else
        <x-backstate::input name="{{ $name }}" {{ $attributes }} />
        @if (!empty($help))
        <p class="mt-2 text-sm font-light text-gray-500">
            {{ $help }}
        </p>
        @endif
        @endif
    </div>
</div>
