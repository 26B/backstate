<?php

namespace TwentySixB\BackState\View\Components\Form\InputMenu;

class Checkbox extends InputMenu
{
    /**
     * Name to replace 'items' in the checkbox menu texts.
     */
    public string $itemsName;

    /**
     * If true then checkbox has a search input, false otherwise.
     */
    public bool $hasSearch;

    /**
     * Search placeholder if $hasSearch is true.
     */
    public string $searchPlaceholder;

    /**
     * If checkbox has search this will contain the livewire component variable name
     *      to update the search string.
     */
    public string $wireSearch;

    /**
     * Instantiate a new SelectMenu.
     *
     * @param array|Illuminate\Support\Collection $items Items to display, and select one.
     * @param bool $hasSearch If true then checkbox has a search input, false otherwise.
     * @param string $wireSearch If checkbox has search this will contain the livewire
     *      component variable name to update the search string.
     * @param string $searchPlaceholder Search placeholder if $hasSearch is true.
     * @param string $itemsName Name to replace 'items' in the checkbox menu texts.
     * @param int|string|array $selected Key(s) of the current selected item(s).
     * @param ?string $key Key to retrieve item key using dot notation.
     * @param ?string $label Key to retrieve item label using dot notation.
     * @param bool $inline If true select menu component should be inlinem this means it is expected
     *      that the select menu component has siblings components to the left or right of it.
     * @return void
     */
    public function __construct(
        $items,
        bool $hasSearch = false,
        string $wireSearch = 'search',
        ?string $searchPlaceholder = null,
        string $itemsName = 'items',
        $selected = null,
        ?string $key = null,
        ?string $label = null,
        string $border = 'border rounded-md'
    ) {
        parent::__construct($items, $selected, $key, $label, $border);
        $this->hasSearch = $hasSearch;
        $this->wireSearch = $wireSearch;
        $this->itemsName = __($itemsName);

        if (is_null($searchPlaceholder)) {
            $this->searchPlaceholder = __("Search {$itemsName}");
        } else {
            $this->searchPlaceholder = $searchPlaceholder;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.form.input-menu.checkbox');
    }
}
