@storybook([
    'name' => 'Panel',
    'args' => [
        // 'title' => 'Modal Title',
    ],
    'argTypes' => [
        // 'title' => [
        //     'control'     => 'text',
        //     // 'description' => 'HTML title attribute',
        // ],
    ],
])

<div x-data="{ isOpen: true }">
    <button x-on:click="isOpen = true" type="button" class="p-3 rounded-full shadow-sm text-white bg-primary-light hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
        <x-backstate::icon name="outline.plus" size="6" />
    </button>
    <x-backstate::modal.panel>
        <h1>Some stuff here</h1>

        {{-- <div class="pt-5 space-x-reverse space-x-4 flex flex-row-reverse">
            <x-backstate::button.primary color="primary" wire:click="save">
                {{ __('Add') }}
            </x-backstate::button.primary>
            <x-backstate::button.white x-on:click="isOpen = false">
                {{ __('Cancel') }}
            </x-backstate::button.white>
        </div> --}}
    </x-backstate::modal.panel>
</div>
