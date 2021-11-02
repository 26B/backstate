<?php

namespace TwentySixB\BackState\Components\Blade\Data;

use Illuminate\View\Component;

class Group extends Component
{
    /**
     * If true then $this group contains input items, otherwise it will contain output items.
     */
    public bool $inGroup;

    /**
     * Group subtitle.
     */
    public string $subtitle;

    /**
     * Group title.
     */
    public string $title;

    /**
     * Instantiate a new Group component.
     *
     * @param bool $inGroup If true then $this group contains input items, otherwise it will contain
     *      output items.
     * @return void
     */
    public function __construct(string $title = '', string $subtitle = '', bool $inGroup = false)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->inGroup = $inGroup;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.data.group');
    }
}
