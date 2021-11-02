<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

            @if (count($this->getDefaultPerPageOptions()) > 1)
            <div class="flex justify-between mb-4">
                <div class="flex items-center mb-3">
                    <div class="text-gray-500 mr-2">
                        {{ __('Results per page:') }}
                    </div>
                    <backstate:input-menu.select wire:model="perPage" :items="$this->perPageSelect()" />
                </div>
            @else
            <div class="flex justify-end mb-4">
            @endif
                @if (count($this->getSearchFilters()) > 0)
                <div class="flex w-1/2">
                    <backstate:input-menu.select class="bg-gray-50" border="rounded-l-md border border-r-0 focus:border-r" wire:model="searchFilter" :items="$this->getSearchFilters()" />
                    <backstate:searchbar wire:model.defer="search" placeholder="{{ $this->getPlaceholder() }}" left-border="border" />
                </div>
                @endif
            </div>

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            @foreach ($columns as $key => $column)
                            <backstate:table.header-cell
                                key="{{ $key }}"
                                title="{{ $column->getTitle() }}"
                                isSortable="{{ $column->isSortable() }}"
                                sortDirection="{{ $this->getSortedColumnKey() === $key ? $this->getSortDirection() : null }}"
                                view="{{ $column->getHeaderViewComponent() }}"
                                :extraAttributes="$column->getAttributes('header')"
                            />
                            @endforeach
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @if (empty($paginator->items()))
                        <tr>
                            <td colspan="100%" class="text-center text-gray-700 font-medium px-6 py-4 whitespace-nowrap">
                                {{ __('No results found') }}
                            </td>
                        </tr>
                        @else
                        @foreach ($paginator->items() as $model)
                        <tr>
                            @foreach ($columns as $column)
                            <backstate:table.data-cell
                                :value="$column->getData($model)"
                                view="{{ $column->getDataViewComponent() }}"
                                :extraAttributes="$column->getAttributes('data')"
                            />
                            @endforeach
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

                @if ($paginator->hasPages())
                <div class="px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{ $paginator->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
