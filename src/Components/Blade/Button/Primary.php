<?php

namespace TwentySixB\BackState\Components\Blade\Button;

class Primary extends Base
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return  \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.button.primary');
    }
}
