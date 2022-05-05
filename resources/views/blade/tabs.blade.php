<div x-data="{ tab: '{{ $activeTab }}' }" {{ $attributes->merge(['class' => 'w-full flex flex-col']) }}>
    <div class="border-b border-gray-200">
        <nav class="flex-grow -mb-px flex space-x-4" aria-label="Tabs">
            @foreach ($tabs as $tabKey => $tabValue)
            <button id="{{ $tabKey }}" x-on:click="tab = '{{ $tabKey }}'" type="button" x-bind:class="{ 'border-primary-500 text-primary-600': tab == '{{ $tabKey }}', 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300': tab != '{{ $tabKey }}' }" class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none">
                {{ $tabValue }}
            </button>
            @endforeach
        </nav>

        {{ $navbar ?? '' }}
    </div>

    {{ $slot }}
</div>
