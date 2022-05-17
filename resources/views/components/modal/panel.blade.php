<div {{ $attributes->merge(['class' => 'fixed z-10 inset-0 overflow-y-auto']) }} x-show="{{ $modalStateVar }}" x-cloak>
    <div
        class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20
               text-center sm:block sm:p-0"
    >
        <div
            class="fixed inset-0 transition-opacity"
            x-show="{{ $modalStateVar }}"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
        >
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;
        <div
            class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left
                    shadow-xl transform transition-all sm:my-8 sm:align-middle
                    sm:max-w-lg sm:w-full sm:p-6"
            role="dialog"
            aria-modal="true"
            aria-labelledby="modal-headline"
            x-on:click.away="{{ $modalStateVar }} = false"
            x-show="{{ $modalStateVar }}"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        >
            {{ $slot }}
        </div>
    </div>
</div>
