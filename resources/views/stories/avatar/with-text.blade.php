@storybook([
    'name' => 'Avatar with initials',
    'args' => [
        'title'     => 'Rui Sardinha',
        'label'     => 'RS',
        'photo_url' => '',
    ],
    'argTypes' => [
        'photo_url' => [
            'control'     => 'text',
            'description' => 'URL of the avatar',
        ],
    ],
])

<x-backstate::avatar.single
    class="h-10 w-10"
    :title=$title
    :label=$label
    :photo_url=$photo_url
/>
