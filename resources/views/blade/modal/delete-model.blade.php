<div x-data="{ isOpen: false }">
    <backstate:button.primary color="red" x-on:click="isOpen = !isOpen">
        {{ __('Delete') }}
    </backstate:button.primary>
    <backstate:modal.action color="red" title="{{ $title }}" additionalInfo="{{ $additionalInfo }}">
        <x-slot name="icon">
            <backstate:icon name="outline.exclamation" color="red-600" />
        </x-slot>
        <x-slot name="buttons">
            @if (is_null($action))
            <backstate:button.primary color="red" x-on:click="isOpen = false" {{ $attributes->whereStartsWith('wire') }}>
                {{ __('Delete') }}
            </backstate:button.primary>
            @else
            <form method="post" action="{{ $action }}">
                @csrf
                @method('delete')

                <backstate:button.primary type="submit" color="red">
                    {{ __('Delete') }}
                </backstate:button.primary>
            </form>
            @endif
            <backstate:button.white class="w-full" x-on:click="isOpen = false">
                {{ __('Cancel') }}
            </backstate:button.white>
        </x-slot>
    </backstate:modal.action>
</div>
