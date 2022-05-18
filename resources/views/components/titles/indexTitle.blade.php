<x-titles.title :breadcrumbs="$breadcrumbs" title="{{ $title }}">
    <x-slot name="buttons">
        <x-backstate::button.primary href="{{ $createModelRoute }}" class="items-center">
            {{ __('New') }}
        </x-backstate::button.primary>
    </x-slot>
</x-titles.title>
