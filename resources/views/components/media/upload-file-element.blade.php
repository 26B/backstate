<div {{ $attributes->merge(['class' => 'pl-3 pr-4 py-3 flex items-center justify-between text-sm']) }}>
    <div class="w-0 flex-1 flex items-center">
        <x-backstate::icon name="solid.paper-clip" class="flex-shrink-0 mr-2" color="gray-400" size="5" />
        <span class="flex-1 w-0 truncate">
            {{ $fileName }}
        </span>
    </div>
    <div class="ml-4 flex-shrink-0 flex space-x-4">
        <button x-show="renaming === false" x-on:click="renaming = true" type="button" class="bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            {{ __('Rename') }}
        </button>
        <span class="text-gray-300" aria-hidden="true">|</span>
        <button wire:click="removeFile({{ $fileKey }})" type="button" class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            {{ __('Remove') }}
        </button>
    </div>
</div>
