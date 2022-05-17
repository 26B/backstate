<div x-data="{ isOpen: false }">
    <x-backstate::button.primary color="red" x-on:click="isOpen = !isOpen">
        {{ __('Delete') }}
    </x-backstate::button.primary>
    <x-backstate::modal.action color="red" title="{{ $title }}" additionalInfo="{{ $additionalInfo }}">
        <x-slot name="icon">
            <x-backstate::icon name="outline.exclamation" color="red-600" />
        </x-slot>
        <x-slot name="buttons">
            @if (is_null($action))
            <x-backstate::button.primary color="red" x-on:click="isOpen = false" {{ $attributes->whereStartsWith('wire') }}>
                {{ __('Delete') }}
            </x-backstate::button.primary>
            @else
            <form method="post" action="{{ $action }}">
                @csrf
                @method('delete')

                <x-backstate::button.primary type="submit" color="red">
                    {{ __('Delete') }}
                </x-backstate::button.primary>
            </form>
            @endif
            <x-backstate::button.white class="w-full" x-on:click="isOpen = false">
                {{ __('Cancel') }}
            </x-backstate::button.white>
        </x-slot>
    </x-backstate::modal.action>
</div>
