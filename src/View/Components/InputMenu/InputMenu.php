<?php

namespace TwentySixB\BackState\View\Components\InputMenu;

use Illuminate\View\Component;

abstract class InputMenu extends Component
{
    /**
     * Select menu button border and corners
     */
    public string $border;

    /**
     * Key to retrieve item key using dot notation.
     */
    protected ?string $itemKey;

    /**
     * Key to retrieve item label using dot notation.
     */
    protected ?string $itemLabel;

    /**
     * Items to display, and select one.
     *
     * @var array|Illuminate\Support\Collection
     */
    public $items;

    /**
     * Select items.
     *
     * Depends on the menu type, can hold only one item (select menu) or multiple (checkbox).
     */
    public $selected;

    /**
     * Instantiate a new SelectMenu.
     *
     * @param  array|Illuminate\Support\Collection $items    Items to display, and select one.
     * @param  int|string|array                    $selected Key(s) of the current selected item(s).
     * @param  ?string                             $key      Key to retrieve item key using dot notation.
     * @param  ?string                             $label    Key to retrieve item label using dot notation.
     * @param  bool                                $inline   If true select menu component should be inlinem this means it is expected
     *                                                       that the select menu component has siblings components to the left or
     *                                                       right of it.
     * @return void
     */
    public function __construct(
        $items = null,
        $selected = null,
        ?string $key = null,
        ?string $label = null,
        string $border = 'border rounded-md'
    ) {
        $this->items = $items;
        $this->selected = $selected;
        $this->itemKey = $key;
        $this->itemLabel = $label;
        $this->border = $border;
    }

    /**
     * Get a specific item field.
     *
     * @param  mixed      $item  An item.
     * @param  int|string $field An item field.
     * @return mixed The value that $field has in $item.
     */
    public function getItemField($item, $field)
    {
        return data_get($item, $field);
    }

    /**
     * Retrieve item key.
     *
     * @param  mixed $item An item.
     * @return mixed Item key.
     */
    public function getItemKey($item, $key = null)
    {
        if (is_null($this->itemKey)) {
            return $key;
        }

        return data_get($item, $this->itemKey);
    }

    /**
     * Retrieve item label.
     *
     * @param  mixed $item An item.
     * @return mixed Item label.
     */
    public function getItemLabel($item)
    {
        if (is_null($this->itemLabel)) {
            return $item;
        }

        return data_get($item, $this->itemLabel);
    }
}
