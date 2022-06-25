@storybook([
    'name' => 'Avatar with initials',
    'args' => [
        'title'     => 'Rui Sardinha',
        'label'     => 'RS',
        'photoUrl' => '',
    ],
    'argTypes' => [
        'photoUrl' => [
            'control'     => 'text',
            'description' => 'URL of the avatar',
        ],
    ],
])

<x-backstate::avatar.single
    class="h-10 w-10"
    :title=$title
    :label=$label
    :photoUrl=$photoUrl
/>
