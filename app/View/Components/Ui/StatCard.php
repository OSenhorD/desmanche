<?php

declare(strict_types=1);

namespace App\View\Components\Ui;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class StatCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = '',
        public string $value = '',
        public string $growValue = '...',
        public string $growColor = 'text-gray-500',
        public string $iconName = 'heroicon-o-chart-bar',
        public string $iconColor = 'text-yellow-500',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.ui.stat-card');
    }
}
