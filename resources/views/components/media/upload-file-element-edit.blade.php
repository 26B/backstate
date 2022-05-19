<div {{ $attributes->merge(['class' => 'pl-3 pr-4 py-3 flex items-center justify-between text-sm']) }}>
    <div class="w-0 flex-1 flex items-center">
        <x-backstate::icon name="solid.paper-clip" class="flex-shrink-0 mr-2" color="gray-400" size="5" />
        <x-backstate::form.input name="medaNames.{{ $fileKey }}" type="text" x-model="name" />
    </div>
    <div class="ml-4 flex-shrink-0 flex space-x-4">
        <button x-on:click="renaming = false" type="button" class="bg-white rounded-md font-medium text-gray-600 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            {{ __('Cancel') }}
        </button>
        <span class="text-gray-300" aria-hidden="true">|</span>
        <button x-on:click="$wire.renameFile({{ $fileKey }}, name).then(() => { renaming = false; })" type="button" class="bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            {{ __('Save') }}
        </button>
        <span class="text-gray-300" aria-hidden="true">|</span>
        <button wire:click="removeFile({{ $fileKey }})" type="button" class="bg-white rounded-md font-medium text-red-600 hover:text-red-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            {{ __('Remove') }}
        </button>
    </div>
</div>
