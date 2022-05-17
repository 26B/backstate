<?php

namespace TwentySixB\BackState\Livewire\Table;

trait WithFilteredSearch
{
    use WithSearch {
        WithSearch::getPlaceholder as parentGetPlaceholder;
        WithSearch::getQueryString as parentGetQueryString;
    }

    /**
     * Active search filter (value null or '' means no filter is active).
     *
     * @var ?string
     */
    public $searchFilter = null;

    /**
     * Get current (selected) search filter.
     *
     * @return string Current Search filter.
     */
    public function getCurrentSearchFilter(): string
    {
        if (is_null($this->searchFilter)) {
            $this->searchFilter = array_key_first($this->getSearchFilters());
        }

        return $this->searchFilter;
    }

    /**
     * Search placeholder.
     *
     * @return string Placeholder
     */
    public function getPlaceholder(): string
    {
        if (is_null($this->searchFilter) or $this->searchFilter === '') {
            $copy = $this->getSearchFilters();
            unset($copy['']);
            return 'Search ' . implode(', ', $copy);
        } else if (array_key_exists($this->searchFilter, $this->getSearchFilters())) {
            return "Search {$this->getSearchFilters()[$this->searchFilter]}";
        }

        return $this->parentGetPlaceholder();
    }

    /**
     * Get all possible search filters
     *
     * @return array All possible search filters.
     */
    abstract public function getSearchFilters(): array;

    /**
     * Add to query string 'searchFilyrt' key to hold the search filter selected.
     *
     * @return array Query string.
     */
    public function getQueryString()
    {
        return array_merge(['searchFilter' => ['except' => null]], $this->parentGetQueryString());
    }

    /**
     * Set the current search filter or null if $searchFilter is not in
     *      WithFilteredSearch::getSearchFilters.
     *
     * @param string $searchFilter Current search filter selected.
     * @return void
     */
    public function setCurrentSearchFilter(string $searchFilter): void
    {
        if (array_key_exists($searchFilter, $this->getSearchFilters())) {
            $this->searchFilter = $searchFilter;
            return;
        }

        $this->searchFilter = null;
    }
}
