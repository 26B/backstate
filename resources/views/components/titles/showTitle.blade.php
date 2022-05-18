<x-titles.title :breadcrumbs="$breadcrumbs" title="{{ $title }}">
        <x-slot name="buttons">
            <x-backstate::button.primary
                href="{{ $editModelRoute }}"
                class="items-center"
            >
                {{ __('Edit') }}
            </x-backstate::button.primary>
        </x-slot>
    </x-titles.title>
