<?php

namespace TwentySixB\BackState\View\Components\Form;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Input name.
     */
    public string $name;

    /**
     * Instantiate a new input layout.
     *
     * @param string $name Input name.
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.form.input');
    }
}
