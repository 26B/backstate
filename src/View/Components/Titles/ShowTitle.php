<?php

namespace TwentySixB\BackState\View\Components\Titles;

use Illuminate\View\Component;

class ShowTitle extends Component
{
    /**
     * Breadcrumbs from team dashboard to model index view.
     */
    public array $breadcrumbs;

    /**
     * Title of the view.
     */
    public string $title;

    /**
     * Link to edit a model.
     */
    public string $editModelRoute;

    /**
     * Create a new component instance.
     *
     * @param array  $breadcrumbs      Breadcrumbs from team dashboards to model index view.
     * @param string $title            Title of the view.
     * @param string $editModelRoute Link to create a model.
     * @return void
     */
    public function __construct(array $breadcrumbs, string $title, string $editModelRoute)
    {
        $this->breadcrumbs = $breadcrumbs;
        $this->title = $title;
        $this->editModelRoute = $editModelRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.titles.showTitle');
    }
}
