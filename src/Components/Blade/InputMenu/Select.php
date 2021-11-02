<?php

namespace TwentySixB\BackState\Components\Blade\InputMenu;

class Select extends InputMenu
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.input-menu.select');
    }
}
