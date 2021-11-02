# BackState

Laravel package with **blade** and **livewire** components defining base logic/state and, also, layouts to use in your laravel project.

## How to use

Let's imagine this package has defined a livewire component (is the same thing for blade) called *Example*:

```php
<?php

namespace TwentySixB\BackState\Components\Livewire;

use Livewire\Component;

class Example extends Component
{
    /**
     * Hiding component logic since it does not make a difference for the illustration.
     */

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('backstate::livewire.example');
    }
}
```

and we want to use it in our project in the view called *my-view*:

```html
<!-- resources/views/my-view.blade.php -->

@extends('layouts.app')

@section('content')
    {{-- Calling backstate component `example` --}}
    <backstate:example/>
@endsection
```

If, for some reason, you want to override the component view, just create the folder `resources/views/vendor/backstate/livewire/` defining here the components views we want to modify, like:

```html
<!-- resources/views/vendor/backstate/livewire/example.blade.php -->

<div>
    {{ __('New component view') }}
</div>
```
