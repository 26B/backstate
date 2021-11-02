<?php

namespace TwentySixB\BackState\Components\Livewire\Table;

trait WithSearch
{
    /**
     * User's query to filter results.
     *
     * @var string
     */
    public $search = '';

    /**
     * Search placeholder.
     *
     * @return string Placeholder
     */
    public function getPlaceholder(): string
    {
        return 'Search';
    }

    /**
     * Add to query string 'search' key to hold the user query search.
     *
     * @return array Query string.
     */
    public function getQueryString()
    {
        return array_merge(['search' => ['except' => '']], $this->queryString);
    }

    /**
     * When the user searches something reset to page to number 1.
     *
     * @return void
     */
    public function updatingSearch(): void
    {
        if (method_exists($this, 'resetPage')) {
            $this->resetPage();
        }
    }
}
