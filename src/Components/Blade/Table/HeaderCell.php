<?php

namespace TwentySixB\BackState\Components\Blade\Table;

class HeaderCell extends Cell
{
    /**
     * Key to identify the underlying column from all columns in table.
     *
     * @var int|string
     */
    public $key;

    /**
     * True if column containing $this header is sortable, false otherwise.
     */
    public bool $isSortable;

    /**
     * Sort direction that the underlying column is implying in the records (if null then the
     *      records are not being sorted by the column that is connected to $this HeaderCell).
     */
    public ?string $sortDirection;

    /**
     * Header title.
     */
    public string $title;

    /**
     * Instantiate a new header cell for a specific table column.
     * @param int|string $key Key to identify the underlying column from all columns in table.
     * @param string $title Header title.
     * @param bool $isSortable True if column containing $this header is sortable, false otherwise.
     * @param string $view Component view to render.
     */
    public function __construct(
        $key,
        string $title,
        bool $isSortable,
        ?string $sortDirection = null,
        string $view = 'blade.table.header',
        array $extraAttributes = []
    ) {
        parent::__construct($view, $extraAttributes);
        $this->key = $key;
        $this->title = $title;
        $this->isSortable = $isSortable;
        $this->sortDirection = $sortDirection;
    }
}
