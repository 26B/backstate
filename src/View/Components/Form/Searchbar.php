<?php

namespace TwentySixB\BackState\View\Components\Form;

use Illuminate\View\Component;

class Searchbar extends Component
{

    /**
     * Instantiate a new Searchbar.
     *
     * @param string $placeholder Search placeholder.
     * @return void
     */
    public function __construct(
        public string $placeholder,
        // TODO: Remove $leftBorder.
        public string $leftBorder = 'rounded-l-md border')
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.form.searchbar');
    }
}
