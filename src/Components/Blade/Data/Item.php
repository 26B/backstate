<?php

namespace TwentySixB\BackState\Components\Blade\Data;

use Illuminate\View\Component;

abstract class Item extends Component
{
    /**
     * Item's label.
     */
    public string $label;

    /**
     * Instantiate a new Item component.
     *
     * @param string $label Item's label.
     * @return void
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }
}
