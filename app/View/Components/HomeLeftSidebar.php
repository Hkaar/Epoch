<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomeLeftSidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected ?string $path = ''
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home-left-sidebar', [
            'path' => $this->path,
        ]);
    }
}
