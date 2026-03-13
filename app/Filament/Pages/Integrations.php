<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;

final class Integrations extends Page
{
    protected static ?string $title = 'Integrações';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::InformationCircle;

    protected string $view = 'filament.pages.integrations';
    
    public $token;
    public $response;

    #[On('ml-users-me')]
    public function usersMe()
    {
        $res = Http::withToken($this->token)
            ->get('https://api.mercadolibre.com/users/me');

        $this->response = $res->json();
    }

    #[On('ml-sites')]
    public function sites()
    {
        $res = Http::withToken($this->token)
            ->get('https://api.mercadolibre.com/sites');

        $this->response = $res->json();
    }

    #[On('ml-listing-types')]
    public function listingTypes()
    {
        $res = Http::withToken($this->token)
            ->get('https://api.mercadolibre.com/sites/MLB/listing_types');

        $this->response = $res->json();
    }
}
