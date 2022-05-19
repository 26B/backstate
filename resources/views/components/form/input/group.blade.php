@props(['additionalInformation' => '', 'title'])

<div>
    <x-titles.subtitle additionalInformation="{{ $additionalInformation }}" title="{{ $title }}"/>
    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        {{ $slot }}
    </div>
</div>
