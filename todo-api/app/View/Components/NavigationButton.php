<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavigationButton extends Component
{
    /**
     * @var string
     */
    public $href;

    /**
     * Create a new component instance.
     *
     * @param string $href
     */
    public function __construct(string $href)
    {
        //
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navigation-button');
    }
}
