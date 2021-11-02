<?php

namespace TwentySixB\BackState\Components\Livewire\Table;

use Illuminate\Database\Eloquent\Builder;

trait WithSort
{
    /**
     * Sort direction 'asc' or 'desc'.
     */
    public string $sortDirection = 'asc';

    /**
     * Key (reference) to column that will sort the retrieved models.
     *
     * @var int|string
     */
    public $sortedColumnKey = null;

    /**
     * Get key (reference) to column that will sort the retrieved models.
     *
     * @return int|string Key to column to sort by.
     */
    public function getSortedColumnKey()
    {
        return $this->sortedColumnKey;
    }

    /**
     * Get direction to sort the models: 'asc' or 'desc'.
     *
     * @return string Sort direction.
     */
    public function getSortDirection(): string
    {
        return $this->sortDirection;
    }

    /**
     * Sort records by column having the key $columnKey.
     *
     * @param int|string $columnKey Column key in $this table.
     * @return void
     */
    public function sortByColumnKey($columnKey): void
    {
        if ($columnKey === $this->sortedColumnKey) {
            $this->sortDirection = ($this->sortDirection === 'asc' ? 'desc' : 'asc');
            return;
        }

        $this->sortedColumnKey = $columnKey;
        $this->sortDirection = 'asc';
    }

    /**
     * Default sort query (before selecting any sort).
     *
     * @return Builder Query with sort.
     */
    protected function defaultSort(Builder $query): Builder
    {
        return $query->orderBy($this->getDefaultSortAttribute(), $this->getSortDirection());
    }

    /**
     * Default model attribute to sort models (before selecting any sort).
     *
     * @return string Default model attribute
     */
    protected function getDefaultSortAttribute(): string
    {
        return 'id';
    }
}
