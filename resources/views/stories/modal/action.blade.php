@storybook([
    'name' => 'Action',
    'args' => [
        'title'          => 'Modal Title',
        'additionalInfo' => 'Here is some additional info',
        'content'           => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus provident magni voluptate deleniti aliquam tenetur, a unde molestiae quisquam dolores? Explicabo cupiditate atque vero quasi a commodi quia placeat doloribus?',
    ],
    'argTypes' => [
    ],
])

<div x-data="{ isOpen: true }">
    <button x-on:click="isOpen = true" type="button" class="p-3 rounded-full shadow-sm text-white bg-primary-light hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
        <x-backstate::icon name="outline.plus" size="6" />
    </button>
    <x-backstate::modal.action title="{{ $title }}" additionalInfo="{{ $additionalInfo }}" color="primary">
        <x-slot name="icon">
            <x-backstate::icon name="solid.shield-exclamation" color="primary-600" />
        </x-slot>

        {{ $content }}

        <x-slot name="buttons">
            { Button placeholder }
        </x-slot>
    </x-backstate::modal.action>
</div>
