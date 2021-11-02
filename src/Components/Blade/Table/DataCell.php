<?php

namespace TwentySixB\BackState\Components\Blade\Table;

class DataCell extends Cell
{
    /**
     * Data cell value.
     *
     * @var mixed
     */
    public $value;

    /**
     * Instantiate a new header cell.
     *
     * @param mixed $value Data cell value.
     * @param string $view Component view to render.
     */
    public function __construct($value, string $view = 'blade.table.data.default', array $extraAttributes = [])
    {
        parent::__construct($view, $extraAttributes);
        $this->value = $value;
    }
}
