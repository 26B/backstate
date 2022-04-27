@storybook([
    'name' => 'Avatar List',
    'args' => [
        'total' => 10,
    ],
    'argTypes' => [
        'total' => [
            'control'     => 'number',
            'description' => 'Amount of users the list represents',
        ],
    ]
])

@php
    $users = collect([
        new \App\Models\User([
            'name'     => 'User 1',
            'initials' => 'U1',
        ]),
        new \App\Models\User([
            'name'     => 'User 2',
            'initials' => 'U2',
        ]),
        // new \App\Models\User([
        //     'name'     => 'User 3',
        //     'initials' => 'U3',
        // ]),
        // new \App\Models\User([
        //     'name'     => 'User 4',
        //     'initials' => 'U4',
        // ]),
    ]);
@endphp

<x-backstate::avatar.list
    :users="$users"
    :total="$total"
/>
