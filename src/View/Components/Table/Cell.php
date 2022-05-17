<?php

namespace TwentySixB\BackState\View\Components\Table;

use Illuminate\View\Component;

abstract class Cell extends Component
{
    /**
     * Extra attributes to pass to view.
     */
    public array $extraAttributes;

    /**
     * Component view to render.
     */
    public string $view;

    /**
     * Instantiate a new cell.
     *
     * @param string $view Component view to render.
     */
    public function __construct(string $view, array $extraAttributes = [])
    {
        $this->view = $view;
        $this->extraAttributes = $extraAttributes;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view($this->view);
    }
}
