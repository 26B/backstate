<div {{ $attributes->merge(['class' => 'flex-grow']) }}>
    <label for="search_candidate" class="sr-only">
        {{ $placeholder }}
    </label>
    <form x-on:submit.prevent="$wire.set('{{ $attributes->wire('model')->value() }}', search)" class="flex rounded-md" x-data="{ search: $wire.get('{{ $attributes->wire('model')->value() }}') }">
        @csrf

        <div class="relative flex-grow focus-within:z-10">
            <input x-model="search" x-on:keydown.enter.prevent="$refs.searchbar_button.click()" type="text" class="{{ $leftBorder }} focus:ring-primary-500 focus:border-primary-500 w-full sm:block sm:text-sm border-gray-300" placeholder="{{ $placeholder }}">
            <button x-show="search" x-on:click="search = ''; $refs.searchbar_button.click()" type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                <backstate:icon name="solid.x-circle" color="gray-500" size="5"/>
            </button>
        </div>
        <button x-ref="searchbar_button" type="submit" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-primary-500 focus:border-primary-500">
            <backstate:icon name="solid.search" color="gray-400" size="5"/>
        </button>
    </form>
</div>
