<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MiniProfileCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected ?bool $followed = false,
        protected ?string $name = '',
        protected ?string $username = '',
        protected ?string $src = '',
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mini-profile-card', [
            'followed' => $this->followed,
            'name' => $this->name,
            'username' => $this->username,
            'src' => $this->src,
        ]);
    }
}
