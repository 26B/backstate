@props(['additionalInformation', 'title'])

<div>
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            {{ $title }}
        </h3>
        <p class="mt-1 text-sm leading-5 text-gray-500">
            {{ $additionalInformation }}
        </p>
    </div>
    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
        {{ $slot }}
    </div>
</div>
