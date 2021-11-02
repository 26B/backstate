<?php

namespace TwentySixB\BackState\Components\Blade\Data;

/**
 * Component to be used in a 'form layout'.
 */
class InItem extends Item
{
    /**
     * Extra info about this input to show to the user.
     */
    public string $help;

    /**
     * Input name.
     */
    public string $name;

    /**
     * Instantiate a new InputItem component.
     *
     * @param string $label Input label.
     * @param string $name Input name.
     * @param string $help Extra info about this input to show to the user.
     * @return void
     */
    public function __construct(string $label, string $name, string $help = '')
    {
        parent::__construct($label);
        $this->name = $name;
        $this->help = $help;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::blade.data.in-item');
    }
}
