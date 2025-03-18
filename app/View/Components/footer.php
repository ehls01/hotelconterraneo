<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class footer extends Component
{
    /**
     * Create a new component inrtance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->contacts = Contact::first()->get();
        return view('components.footer', compact('contacts'));
    }
}
