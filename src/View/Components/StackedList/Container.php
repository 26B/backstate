<?php

namespace TwentySixB\BackState\View\Components\StackedList;

use Illuminate\View\Component;

class Container extends Component
{
    /**
     * Item component view to render each component.
     */
    public string $itemView;

    /**
     * If true then each item in the stack list in linkable (go to link when clicked), false
     *      otherwise.
     */
    public bool $linkable;

    /**
     * Items to display.
     *
     * @var array|Illuminate\Support\Collection
     */
    public $items;

    /**
     * Instantiate a new staked list container.
     *
     * @param string $itemView Item component view to render each component.
     * @param array|Illuminate\Support\Collection $items Items to display.
     * @param bool $linkable If true then each item in the stack list in linkable (go to link when
     *      clicked), false otherwise.
     * @return void
     */
    public function __construct(
        $items = null,
        string $itemView,
        bool $linkable = false
    ) {
        $this->itemView = $itemView;
        $this->items = $items;
        $this->linkable = $linkable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.stacked-list.container');
    }
}
