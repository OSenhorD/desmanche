<?php

declare(strict_types=1);

namespace App\Services\Marketplaces\MercadoLivre;

use Illuminate\Support\Facades\Http;

final class MercadoLivreAuthService
{
    private string $baseUrl = 'https://api.mercadolibre.com';

    public function getToken(string $code)
    {
        $response = Http::asForm()->post(
            $this->baseUrl.'/oauth/token',
            [
                'code' => $code,
                'grant_type' => 'authorization_code',
                'client_id' => config('services.marketplace.mercadolivre.app_id'),
                'client_secret' => config('services.marketplace.mercadolivre.secret'),
                'redirect_uri' => config('services.marketplace.mercadolivre.redirect_uri'),
            ]
        );

        return $response->json();
    }
}
