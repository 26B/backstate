<?php

namespace TwentySixB\BackState\Components\Blade\Modal;

use Illuminate\View\Component;

class Panel extends Component
{
    /**
     * Alpine variable name to handle open/close of modal.
     */
    public string $modalStateVar;

    /**
     * Create a new component instance.
     *
     * @param string $modalStateVar Alpine variable name to handle open/close of modal.
     * @return void
     */
    public function __construct(string $modalStateVar = 'isOpen')
    {
        $this->modalStateVar = $modalStateVar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.modal.panel');
    }
}
