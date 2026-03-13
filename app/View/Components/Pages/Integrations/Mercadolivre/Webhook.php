<?php

declare(strict_types=1);

namespace App\View\Components\Pages\Integrations\Mercadolivre;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

final class Webhook extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.pages.integrations.mercadolivre.webhook');
    }
}
