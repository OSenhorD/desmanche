<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use Filament\Pages\Page;

final class Dashboard2 extends Page
{
    protected string $view = 'filament.pages.dashboard2';

    protected static ?string $title = 'Dashboard';

    protected static ?int $navigationSort = -2;
}
