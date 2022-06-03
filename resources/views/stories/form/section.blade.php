@storybook([
    'name' => 'Section',
    'args' => [
        'title' => 'Title of the section',
        'description' => 'Description of this section'
    ],
    'argTypes' => [
    ],
])

<x-backstate::form.section submit="submitAction">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="description">
        {{ $description }}
    </x-slot>

    <x-slot name="form">
        {Form placeholder}
    </x-slot>

    <x-slot name="actions">
        {Actions placeholder}
    </x-slot>
</x-backstate::form.section>
