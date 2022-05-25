@props([
    'label'     => '',
    'photo_url' => null,
    'title'     => '',
])

{{-- TODO: How to handle sizes / classes --}}
<div {{ $attributes }}>
    @if ($photo_url)
    <span class="inline-flex items-center justify-center">
    <img
        {{ $attributes->merge(['class' => 'border-2 border-white rounded-full object-cover']) }}
        src="{{ $photo_url }}"
        alt="{{ $title }}"
    />
    </span>
    @else
    <span
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center bg-gray-dark rounded-full border-2 border-white']) }}
        >
        <span class="text-lg font-medium leading-none text-white">{{ Str::of($label)->substr(0, 2) }}</span>
    </span>
    @endif
</div>
