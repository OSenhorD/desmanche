<?php

declare(strict_types=1);

namespace App\View\Components\Ui;

use App\Enums\BadgeType;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class Badge extends Component
{
    public BadgeType $type;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $class = '',
        public string $icon = '',
        string|BadgeType $type = BadgeType::SUCCESS,
    ) {
        $this->type = $type instanceof BadgeType
            ? $type
            : BadgeType::from($type);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.ui.badge');
    }
}
