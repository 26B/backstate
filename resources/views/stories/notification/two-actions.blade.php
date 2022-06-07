@storybook([
    'name' => 'Two actions',
    'args' => [
        'title'            => 'Notification Title',
        'body'             => 'This is the long body',
        'primary_action'   => 'View',
        'secondary_action' => 'Close',
    ],
    'argTypes' => [
        'title' => [
            'control'     => 'text',
            'description' => 'Title of the notification',
        ],
        'body' => [
            'control'     => 'text',
            'description' => 'Body of the notification',
        ],
        'primary_action' => [
            'control'     => 'text',
            'description' => 'Primary action label',
        ],
        'secondary_action' => [
            'control'     => 'text',
            'description' => 'Second action label',
        ],
    ],
])

<x-backstate::notification
    :title="$title"
    :body="$body"
>
    @if($primary_action)
    <x-slot:primary_action>
        <x-backstate::notification.button>
            {{ $primary_action }}
        </x-backstate::notification.button>
    </x-slot>
    @endif
    @if($secondary_action)
    <x-slot:secondary_action>
        <x-backstate::notification.button>
            {{ $secondary_action }}
        </x-backstate::notification.button>
    </x-slot>
    @endif
</x-backstate::notification>
