<?php

namespace TwentySixB\BackState\View\Components\Titles;

use Illuminate\View\Component;

class PageTitle extends Component
{
    /**
     * Route breadcrumbs.
     */
    public array $breadcrumbs;

    /**
     * Page title.
     */
    public string $title;

    /**
     * Href to get model's create view.
     */
    public ?string $createModelRoute;

    /**
     * Href to get model's edit view,
     */
    public ?string $editModelRoute;

    public $tags;

    /**
     * Create a new component instance.
     *
     * @param array  $breadcrumbs        Route breadcrumbs.
     * @param string $title              Page tile.
     * @param ?string $createModelRoute  Href to get model's create view.
     * @param ?string $editModelRoute    Href to get model's edit view.
     * @return void
     */
    public function __construct(
        array $breadcrumbs,
        string $title,
        ?string $createModelRoute = null,
        ?string $editModelRoute = null,
        $tags = null
    ) {
        $this->breadcrumbs = $breadcrumbs;
        $this->title = $title;
        $this->createModelRoute = $createModelRoute;
        $this->editModelRoute = $editModelRoute;
        $this->tags = $tags;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.titles.page-title');
    }
}
