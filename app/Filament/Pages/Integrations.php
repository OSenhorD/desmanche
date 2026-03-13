<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class Integrations extends Page
{
    protected static ?string $title = 'Integrações';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InformationCircle;

    protected string $view = 'filament.pages.integrations';
}
