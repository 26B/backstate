@storybook([
    'name' => 'List with pictures',
    'args' => [
        'amount' => 4,
        'total'  => 8,
    ],
    'argTypes' => [
        'amount' => [
            'control'     => 'number',
            'description' => 'Avatars to show',
        ],
        'total' => [
            'control'      => 'number',
            'description'  => 'Amount of rows the list represents',
        ],
    ],
])

@php
    $rows = [];
    for ($i=1; $i <= $amount; $i++) {
        $rows[] = (object) [
            'name'      => "Item {$i}",
            'initials'  => "U{$i}",
            'photo_url' => 'https://i.pravatar.cc/80?u=' . $i,
        ];
    }
    $rows = collect($rows);
@endphp

<x-backstate::avatar.list
    :rows="$rows"
    :total="$total"
>
    @foreach ($rows as $row)
    <x-backstate::avatar.single
        class="h-10 w-10"
        :title="$row->name"
        :label="$row->initials"
        :photo_url="$row->photo_url"
    />
    @endforeach
</x-backstate::avatar.list>
