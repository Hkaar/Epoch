<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataTable extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  array<string>  $columns
     * @param  array<string, string>  $routes
     */
    public function __construct(
        public array $columns,
        public string $title,
        public array $routes,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table', [
            'columns' => $this->columns,
            'title' => $this->title,
            'routes' => $this->routes,
        ]);
    }
}
