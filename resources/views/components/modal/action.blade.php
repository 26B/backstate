<x-backstate::modal.panel {{ $attributes }}>
    <div class="sm:flex sm:items-start">
        <div
            class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full
                   bg-{{ $color }} sm:mx-0 sm:h-10 sm:w-10"
        >
            {{ $icon }}
        </div>
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left grow">
            <h3 id="modal-headline" class="text-lg leading-6 font-medium text-gray-900">
                {{ $title }}
            </h3>
            @if($additionalInfo)
            <p class="text-sm leading-5 text-gray-500 mt-2">{{ $additionalInfo }}</p>
            @endif

            <div class="mt-2">
                {{ $slot }}
            </div>
        </div>
    </div>
    <div class="mt-5 sm:mt-4 sm:flex sm:flex-row-reverse space-x-4 space-x-reverse">
        {{ $buttons }}
    </div>
</x-backstate::modal.panel>
