<div class="{{ $selected === $media->uuid ? 'ring-2 ring-offset-2 ring-primary-500' : 'focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-primary-500' }} group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 overflow-hidden">
    <img
        src="{{ $media->thumbnail }}"
        alt=""
        class="{{ $getObjectFit() }} {{ $selected !== $media->uuid ? 'group-hover:opacity-75' : '' }} pointer-events-none"
    >
    <button wire:click="$set('selectedMedia', '{{ $media->uuid }}')" type="button" class="absolute inset-0 focus:outline-none">
        <span class="sr-only"> {{ __('View details for' . $media->name) }}</span>
    </button>
</div>
<p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">
    {{ $media->name }}
</p>
<p class="block text-sm font-medium text-gray-500 pointer-events-none">
    {{ $media->human_readable_size }}
</p>
