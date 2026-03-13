<?php

declare(strict_types=1);

namespace App\View\Components\Ui;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $subtitle = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.ui.card');
    }
}
