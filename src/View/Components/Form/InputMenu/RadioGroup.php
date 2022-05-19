<?php

namespace TwentySixB\BackState\View\Components\Form\InputMenu;

class RadioGroup extends InputMenu
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.form.input-menu.radio-group');
    }
}
