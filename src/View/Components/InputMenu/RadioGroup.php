<?php

namespace TwentySixB\BackState\View\Components\InputMenu;

class RadioGroup extends InputMenu
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.input-menu.radio-group');
    }
}
