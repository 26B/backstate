<div class="md:flex md:items-center md:justify-between flex-1 min-w-0">
    <div>
        @if(count($breadcrumbs) > 0)
        <x-backstate::breadcrumbs.breadcrumbs :breadcrumbs="$breadcrumbs"/>
        @endif

        <div>
            <h1 class="text-3xl font-bold leading-tight text-cool-gray-900 sm:leading-9 sm:truncate">
                {{ $title }}
            </h1>

            @if($tags)
            <dl class="mt-1 flex flex-col items-center sm:flex-row sm:flex-wrap">
                {{ $tags }}
            </dl>
            @endif
        </div>
    </div>
    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
        @if($createModelRoute)
        <x-backstate::button.primary href="{{ $createModelRoute }}" class="items-center">
            {{ __('New') }}
        </x-backstate::button.primary>

        @elseif($editModelRoute)
        <x-backstate::button.primary href="{{ $editModelRoute }}" class="items-center">
            {{ __('Edit') }}
        </x-backstate::button.primary>

        @else
        {{ $slot }}
        @endif
    </div>
</div>
