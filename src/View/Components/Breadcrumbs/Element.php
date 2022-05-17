<?php

namespace TwentySixB\BackState\View\Components\Breadcrumbs;

use Illuminate\View\Component;

class Element extends Component
{
    /**
     * True if breadcrumb element is the last one in the breadcrumbs sequence, false otherwise.
     */
    public bool $isLast;

    /**
     * Breadcrumb name.
     */
    public string $name;

    /**
     * Breadcrumb href.
     */
    public ?string $href;

    /**
     * Create a new component instance.
     *
     * @param string $name Breadcrumb name.
     * @param string $href Breadcrumb href.
     * @return void
     */
    public function __construct(string $name, ?string $href = null, bool $isLast = false)
    {
        $this->name = $name;
        $this->href = $href;
        $this->isLast = $isLast;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.breadcrumbs.element');
    }
}
