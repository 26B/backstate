<?php

namespace TwentySixB\BackState\Components\Livewire\Table;

use Exception;
use Livewire\WithPagination as LivewireWithPagination;

trait WithPagination
{
    use LivewireWithPagination {
        livewireWithPagination::getQueryString as parentQueryString;
    }

    /**
     * How many records should be displayed per page (max value).
     *
     * @var int
     */
    public $perPage = 15;

    /**
     * Get defalt, and only possible, $perPage options.
     */
    public function getDefaultPerPageOptions(): array
    {
        return [15, 5, 25, 50];
    }

    /**
     * Get current $perPage value.
     *
     * @return int Current $perPage value;
     */
    public function getPerPage(): int
    {
        $this->updatedPerPage($this->perPage);
        return $this->perPage;
    }

    /**
     * Add to query string 'per_page' option.
     *
     * @return array Query string with 'per_page' option.
     */
    public function getQueryString()
    {
        return array_merge(
            ['perPage' => ['except' => $this->getDefaultPerPageOptions()[0]]],
            $this->parentQueryString()
        );
    }

    /**
     * Set new $perPage value.
     *
     * @param  int $perPage New $perPage value.
     * @return void
     */
    public function updatedPerPage(int $value): void
    {
        $defaultPerPageOptions = $this->getDefaultPerPageOptions();

        if (!is_int($value) or $value <= 0 or !in_array($value, $defaultPerPageOptions)) {
            $value = $defaultPerPageOptions[0];
        }

        $this->perPage = $value;
    }
}
