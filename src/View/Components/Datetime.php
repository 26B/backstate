<?php

namespace TwentySixB\BackState\View\Components;

use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class Datetime extends Component
{
    /**
     * The datetime.
     */
    public string $datetime;

    /**
     * Parsed datetime.
     */
    public string $formattedDatetime;

    /**
     * Create a new component instance.
     *
     * @param string|\Illuminate\Support\Carbon $datetime Datetime to render (it is assumed that
     *      timezone and locale are already defined).
     * @param string $format Format to use when printing datetime.
     * @return void
     */
    public function __construct($datetime, string $format = 'lll')
    {
        $datetime = Carbon::parse($datetime);
        $this->datetime = $datetime->toAtomString();
        $this->formattedDatetime = $datetime->isoFormat($format);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::components.datetime');
    }
}
