@storybook([
    'name' => 'Avatar',
    'args' => [
        //
    ]
])

@php
    $user = new \App\Models\User([
        'name'     => 'User name',
        'initials' => 'UN',
    ]);
@endphp

<x-backstate::avatar.single :user="$user" />
