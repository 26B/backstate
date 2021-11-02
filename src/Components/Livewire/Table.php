<?php

namespace TwentySixB\BackState\Components\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Livewire\Component;
use TwentySixB\BackState\Components\Livewire\Table\WithPagination;
use TwentySixB\BackState\Components\Livewire\Table\WithFilteredSearch;
use TwentySixB\BackState\Components\Livewire\Table\WithSort;

abstract class Table extends Component
{
    use WithPagination { getQueryString as private getQueryStringPagination;
    }
    use WithFilteredSearch { getQueryString as private getQueryStringSearch;
    }
    use WithSort;

    /**
     * Dummy var to for update on component.
     *
     * @var boolean
     */
    public $update = false;

    /**
     * Mount component, immediately after instantiation and before render().
     *
     * @param  int $perPage How many records should be displayed per page (max value).
     * @return void
     */
    public function mount()
    {
        if (count($this->getSearchFilters()) > 0) {
            $this->searchFilter = $this->getCurrentSearchFilter();
        }
    }

    /**
     * Query string values used.
     *
     * @return array
     */
    public function getQueryString(): array
    {
        return array_merge(
            $this->getQueryStringPagination(),
            $this->getQueryStringSearch(),
            $this->queryString
        );
    }

    /**
     * Get title of searchable columns as search filters.
     *
     * @return array Title of searchable columns.
     */
    public function getSearchFilters(): array
    {
        $filters = collect($this->columns())
            ->filter(fn ($col) => $col->isSearchable())
            ->map(fn ($col) => $col->getTitle());

        if (count($filters) > 1) {
            $filters->prepend('All', '');
        }

        return $filters->all();
    }

    /**
     * Per page default options with keys (same key as in value) to select value in the
     *      select-menu.
     *
     * @return array Default per page options ($option => $option).
     */
    public function perPageSelect(): array
    {
        return Arr::sort(
            array_combine($this->getDefaultPerPageOptions(), $this->getDefaultPerPageOptions())
        );
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::livewire.table', $this->getBaseData());
    }

    /**
     * Column helpers for this table.
     *
     * @return array Array of columns.
     */
    abstract protected function columns(): array;

    /**
     * Model query builder to retrieve models.
     *
     * @return Builder
     */
    abstract protected function modelQuery(): Builder;

    /**
     * Base table data to pass to view.
     *
     * @return array Data.
     */
    protected function getBaseData(): array
    {
        return [
            'columns' => $this->columns(),
            'paginator' => $this->getModels()->paginate($this->getPerPage())
        ];
    }

    /**
     * Get records for $this table, applying base query (`modelQuery()`), search filters and/or sorted order.
     *
     * @return Builder Final DB query to retrieve records.
     */
    protected function getModels(): Builder
    {
        $query = $this->modelQuery();
        $columns = $this->columns();

        // Search is enabled and $search is not empty-like.
        if (count($this->getSearchFilters()) > 0 and ($this->search = trim($this->search))) {
            if ($this->getCurrentSearchFilter() === '') {  // apply search to all defined filters (columns)

                $query->where(function ($query) use ($columns) {
                    foreach ($this->getSearchFilters() as $columnKey => $_) {
                        if ($columnKey === '') {
                            continue;
                        }

                        $query->orWhere($columns[$columnKey]->searchCallback()($query, $this->search));
                    }
                });
            } else {  // apply only search to a specific defined filer (column).
                $columns[$this->getCurrentSearchFilter()]->searchCallback()($query, $this->search)($query);
            }
        }

        if (($sortKey = $this->getSortedColumnKey()) !== null
            and ($sortByColumn = $columns[$sortKey] ?? null) !== null
            and $sortByColumn->isSortable()
        ) {
            return $sortByColumn->sort($query, $this->getSortDirection());
        }

        return $this->defaultSort($query);
    }

    /**
     * Force update on component.
     *
     * @return void
     */
    public function updateTable(): void
    {
        $this->update = !$this->update;
    }
}
