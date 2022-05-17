<aside class="hidden w-5/12 bg-white p-8 pr-1 border-l border-gray-200 overflow-y-auto lg:block">
    <div class="pb-16 space-y-6">
        <div>
            <div class="block w-full aspect-w-10 aspect-h-7 rounded-lg overflow-hidden">
                <img src="{{ $media->thumbnail }}" alt="" class="object-cover">
            </div>
        <div x-data="{ isRenaming: @entangle('isRenaming') }" class="mt-4">
                <div x-show="!isRenaming" class="flex items-start justify-between">
                    <div>
                        <div class="flex">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ $media->name }}
                            </h2>
                        </div>
                        <p class="text-sm font-medium text-gray-500">
                            {{ $media->human_readable_size }}
                        </p>
                    </div>
                    <div class="flex justify-between">
                        <button x-on:click="isRenaming = true" type="button" class="bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <x-backstate::icon name="solid.pencil" color="gray-400" size="5" />
                        </button>
                        <button type="button" class="ml-1 bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <x-backstate::icon name="outline.heart" size="5" color="gray-400" />
                        </button>
                    </div>
                </div>
                <form x-show="isRenaming" wire:submit.prevent="renameMedia">
                    @csrf

                    <x-backstate::input name="mediaName" wire:model.defer="mediaName" />
                    <span class="mt-2 flex-shrink-0 flex justify-end items-end space-x-4">
                        <button x-on:click="isRenaming = false" type="button" class="bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            {{ __('Cancel') }}
                        </button>
                        <span class="text-gray-300" aria-hidden="true">|</span>
                        <button class="bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                            {{ __('Save') }}
                        </button>
                    </span>
                </form>
            </div>
        </div>
        <div>
            <h3 class="font-medium text-gray-900">
                {{ __('Information') }}
            </h3>
            <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">
                        {{ __('Uploaded by') }}
                    </dt>
                    <dd class="text-gray-900">
                        {{ App\Models\User::find($media->getCustomProperty('created_by'))->name }}
                    </dd>
                </div>

                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">
                        {{ __('Created') }}
                    </dt>
                    <dd class="text-gray-900">
                        {{ $media->created_at->toFormattedDateString() }}
                    </dd>
                </div>

                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">
                        {{ __('Last modified') }}
                    </dt>
                    <dd class="text-gray-900">
                        {{ $media->updated_at->toFormattedDateString() }}
                    </dd>
                </div>

                @foreach ($information as $key => $value)
                <div class="py-3 flex justify-between text-sm font-medium">
                    <dt class="text-gray-500">
                        {{ __($key) }}
                    </dt>
                    <dd class="text-gray-900">
                        {{ $value }}
                    </dd>
                </div>
                @endforeach
            </dl>
        </div>
        <div>
            <h3 class="font-medium text-gray-900">
                {{ __('Description') }}
            </h3>
            <div class="mt-2 flex items-center justify-between">
                <p class="text-sm text-gray-500 italic">
                    {{ __('Add a description to this image.') }}
                </p>
                <button type="button" class="bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <x-backstate::icon name="solid.pencil" color="gray-400" size="5" />
                </button>
            </div>
        </div>
        <div class="flex">
            <button wire:click="delete" type="button" class="flex-1 mr-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                {{ __('Delete') }}
            </button>
            <button wire:click="download" type="button" class="flex-1 bg-primary-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                {{ __('Download') }}
            </button>
        </div>
    </div>
</aside>
