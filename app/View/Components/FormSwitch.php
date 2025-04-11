<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormSwitch extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $name,
        protected ?string $label = null,
        protected ?string $hint = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-switch', [
            'name' => $this->name,
            'label' => $this->label,
            'hint' => $this->hint,
        ]);
    }
}
