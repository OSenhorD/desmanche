<?php

declare(strict_types=1);

namespace App\Integrations\Marketplaces\MercadoLivre;

use Illuminate\Support\Facades\Http;

final class MercadoLivreClient
{
    private string $baseUrl = 'https://api.mercadolibre.com';

    public function get(string $endpoint, string $token)
    {
        return Http::withToken($token)
            ->get($this->baseUrl.$endpoint)
            ->json();
    }

    public function post(string $endpoint, array $data, string $token)
    {
        return Http::withToken($token)
            ->post($this->baseUrl.$endpoint, $data)
            ->json();
    }
}
