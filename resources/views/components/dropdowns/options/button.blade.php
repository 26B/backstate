@props(['text'])

<button type="button" {{ $attributes->merge(['class' => 'w-full text-left text-gray-700 block px-4 py-2 text-sm focus:outline-none']) }}>
    {{ $text }}
</button>
