@props(['user' => null, 'size' => 16])
<div {{ $attributes }}>
    @if ($user->profile_photo_url)
    <span class="inline-flex items-center justify-center">
    <img
        {{ $attributes->merge(['class' => 'border-2 border-white rounded-full object-cover']) }}
        src="{{ $user->profile_photo_url }}"
        alt="{{ $user->name }}"
    />
    </span>
    @else
    <span
        {{ $attributes->merge(['class' => 'inline-flex items-center justify-center bg-gray-500 rounded-full border-2 border-white']) }}
        >
        <span class="text-lg font-medium leading-none text-white">{{ $user->initials }}</span>
    </span>
    @endif
</div>
