<?php

namespace TwentySixB\BackState\View\Components\Button;

class Secondary extends Base
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.button.secondary');
    }
}
