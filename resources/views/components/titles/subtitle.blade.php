@props(['additionalInformation' => '', 'subtitle'])

<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">
        {{ $subtitle }}
    </h3>
    @if($additionalInformation)
        <p class="max-w-2xl text-sm leading-5 text-gray-500">
            {{ $additionalInformation }}
        </p>
    @endif
</div>
