<x-backstate::modal.action
    title="{{ $title }}"
    additionalInfo="{{ $description ?? '' }}"
    color="gray"
    selected="{{ $selected ?? '' }}"
    >

    <x-slot name="icon">
        <x-backstate::icon name="solid.shield-exclamation" size="10" />
    </x-slot>

    <div class="relative z-0 mt-1 border border-gray rounded-lg cursor-pointer">
        @foreach ($this->getOptions() as $option_name => $option)
            <button
                type="button"
                class="justify-between relative px-4 py-3 inline-flex w-full rounded-lg focus:z-10 focus:outline-none {{ $selected === $option_name ? 'bg-gray-light' : '' }} hover:bg-gray-light {{ ! $loop->first ? 'border-t border-gray-light rounded-t-none' : '' }} {{ ! $loop->last ? 'rounded-b-none' : '' }}"
                wire:click="$set('selected', '{{ $option_name }}');"
                >
                <div class="text-left {{ $selected !== $option_name ? 'opacity-75' : '' }}">
                    <!-- Role Name -->
                    <div class="text-sm {{ $selected === $option_name ? 'font-semibold' : '' }}">
                        {{ $option->name }}
                    </div>

                    <!-- Role Description -->
                    <div class="block mt-2 text-xs">
                        {{ $option->description }}
                    </div>
                </div>

                <div class="justify-self-end self-center">
                @if ($selected === $option_name)
                    <svg class="ml-2 h-5 w-auto text-primary" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                @endif
                </div>
            </button>
        @endforeach
    </div>

    <x-slot name="buttons">
        {{-- TODO: Replace with backstate buttons after they are refactored --}}
        <x-jet-secondary-button x-on:click="isOpen = false" wire:emitSelf='cancel' wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-jet-secondary-button>

        <x-jet-button class="ml-3" wire:click="save" wire:loading.attr="disabled">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-backstate::modal.action>
