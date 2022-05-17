@props(['label', 'text'])

<div class="px-4 py-3">
    <x-backstate::dropdowns.options.text text="{{ $label }}" />
    <x-backstate::dropdowns.options.text
        class="font-medium text-gray-900 truncate"
        text="{{ $text }}"
    />
</div>
