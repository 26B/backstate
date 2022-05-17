<?php

namespace TwentySixB\BackState\View\Components\StackedList;

use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Item data to pass to item view.
     *
     * @var mixed
     */
    public $item;

    /**
     * Item key.
     *
     * @var int|string
     */
    public $key;

    /**
     * Dynamic item view to render.
     */
    public string $view;

    /**
     * Instantiate a new stacked list item.
     *
     * @param mixed $item Item data to pass to item view.
     * @param int|string $key Item key.
     * @param string $view Item view to render.
     * @return void
     */
    public function __construct($item, $key, string $view)
    {
        $this->item = $item;
        $this->key = $key;
        $this->view = $view;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view($this->view);
    }
}
