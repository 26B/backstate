@props(['submit'])

<div {{ $attributes }}>
    <x-jet-section-title>
        <x-slot name="title">{{ $title }}</x-slot>
        <x-slot name="description">{{ $description }}</x-slot>
    </x-jet-section-title>

    <form class="mt-4" wire:submit.prevent="{{ $submit }}">
        <div class="px-4 py-5 bg-white sm:p-6 shadow {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
            <div class="grid grid-cols-6 gap-6">
                {{ $form }}
            </div>
        </div>

        @if (isset($actions))
            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {{ $actions }}
            </div>
        @endif
    </form>
</div>
