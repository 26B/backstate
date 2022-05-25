<x-jet-dropdown {{ $attributes }}>
    <x-slot name="trigger">
            <button type="button"
                class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
            >
                @isset($icon)
                    {!! $icon !!}
                @else
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                @endisset
            </button>
    </x-slot>

    <x-slot:content>
        <div class="overflow-hidden">
            {{ $slot }}
        </div>
    </x-slot:content>
</x-jet-dropdown>
