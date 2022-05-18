<?php

namespace TwentySixB\BackState\View\Components\Titles;

use Illuminate\View\Component;

class IndexTitle extends Component
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
     * Link to create a new model.
     */
    public string $createModelRoute;

    /**
     * Create a new component instance.
     *
     * @param array  $breadcrumbs      Breadcrumbs from team dashboards to model index view.
     * @param string $title            Title of the view.
     * @param string $createModelRoute Link to create a new model.
     * @return void
     */
    public function __construct(array $breadcrumbs, string $title, string $createModelRoute)
    {
        $this->breadcrumbs = $breadcrumbs;
        $this->title = $title;
        $this->createModelRoute = $createModelRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.titles.indexTitle');
    }
}
