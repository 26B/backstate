@storybook([
    'name' => 'Context Menu',
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
</x-backstate::nav.context-menu>
