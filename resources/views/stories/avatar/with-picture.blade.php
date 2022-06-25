@storybook([
    'name' => 'Avatar with picture',
    'args' => [
        'title'     => 'Rui Sardinha',
        'label'     => 'RS',
        'photoUrl' => 'https://i.pravatar.cc/80',
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
