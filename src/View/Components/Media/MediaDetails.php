<?php

namespace TwentySixB\BackState\View\Components\Media;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaDetails extends Component
{
    public array $information;

    /**
     * Media being focused (details).
     */
    public Media $media;

    /**
     * Create a new component instance.
     *
     * @param  Media $media Media object being focused.
     * @return void
     */
    public function __construct(Media $media)
    {
        $this->media = $media;

        $properties = ['dimensions' => fn ($v) => implode(' x ', $v), 'duration' => fn ($v) => $v];
        $this->information = [];

        foreach ($properties as $property => $getter) {
            if (! $this->media->hasCustomProperty($property)) {
                continue;
            }

            $this->information[Str::ucfirst($property)] = $getter(
                $this->media->getCustomProperty($property)
            );
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('backstate::components.media.media-details');
    }
}
