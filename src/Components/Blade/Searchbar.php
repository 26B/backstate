<?php

namespace TwentySixB\BackState\Components\Blade;

use Illuminate\View\Component;

class Searchbar extends Component
{
    /**
     * Search placeholder.
     */
    public string $placeholder;

    /**
     * Search bar left border and corners.
     */
    public string $leftBorder;

    /**
     * Instantiate a new Searchbar.
     *
     * @param string $placeholder Search placeholder.
     * @return void
     */
    public function __construct(string $placeholder, string $leftBorder = 'rounded-l-md border')
    {
        $this->placeholder = $placeholder;
        $this->leftBorder = $leftBorder;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.searchbar');
    }
}
