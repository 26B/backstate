<?php

namespace TwentySixB\BackState\View\Components\Media;

use Illuminate\View\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaItem extends Component
{
    /**
     * UUID of the selected media (being focused; can be different from $media->uuid).
     */
    public string $selected;

    /**
     * Media file.
     */
    public Media $media;

    /**
     * Create a new component instance.
     *
     * @param  Media $media Media file.
     * @return void
     */
    public function __construct(Media $media, string $selected = '')
    {
        $this->media = $media;
        $this->selected = $selected;
    }

    public function getObjectFit(): string
    {
        switch ($this->media->collection_name) {
        case 'image':
        case 'video':
            return 'object-cover';
        case 'audio':
            return 'object-contain';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('backstate::components.media.media-item');
    }
}
