<?php

namespace TwentySixB\BackState\View\Components\Media;

use Illuminate\View\Component;

class UploadFileElement extends Component
{
    /**
     * Key pointing to $this file in $media array (livewire).
     */
    public string $fileKey;

    /**
     * Client file name.
     */
    public string $fileName;

    /**
     * Create a new component instance.
     *
     * @param  string $fileKey  Key pointing to $this file in $media array (livewire).
     * @param  string $fileName Client file name.
     * @return void
     */
    public function __construct(string $fileKey, string $fileName)
    {
        $this->fileKey = $fileKey;
        $this->fileName = $fileName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('backstate::components.media.upload-file-element');
    }
}
