@storybook([
    'name' => 'Avatar with picture',
    'args' => [
        'title'     => 'Rui Sardinha',
        'label'     => 'RS',
        'photo_url' => 'https://i.pravatar.cc/80',
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
