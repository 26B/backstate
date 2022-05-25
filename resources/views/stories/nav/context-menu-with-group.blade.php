@storybook([
    'name' => 'Context Menu with options group',
    'args' => [
        'align' => 'right',
    ],
    'argTypes' => [
        'align' => [
            'control' => 'radio',
            'options' => [
                'Left'  => 'left',
                'Right' => 'right',
            ],
            'description' => 'Determines position of the popup',
        ],
    ],
])

<x-backstate::nav.context-menu
    :align="$align"
>
    <x-backstate::nav.context-menu.item href="#">{{ __('Option 1') }}</x-backstate::nav.context-menu.item>
    <x-backstate::nav.context-menu.item href="#">{{ __('Option 2') }}</x-backstate::nav.context-menu.item>

    <div class="border-t border-gray-100"></div>

    <div class="block px-4 py-2 text-xs text-gray-400">
        {{ __('Group of options') }}
    </div>
    <x-backstate::nav.context-menu.item href="#">{{ __('Option 2') }}</x-backstate::nav.context-menu.item>
</x-backstate::nav.context-menu>
