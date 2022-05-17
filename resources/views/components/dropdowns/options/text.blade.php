@props(['text'])

<p {{ $attributes->merge(['class' => 'text-xs leading-5']) }}>
    {{ $text }}
</p>
