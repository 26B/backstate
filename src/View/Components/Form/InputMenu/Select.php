<?php

namespace TwentySixB\BackState\View\Components\Form\InputMenu;

class Select extends InputMenu
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.form.input-menu.select');
    }
}
