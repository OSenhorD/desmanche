<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Marketplaces\MercadoLivre\MercadoLivreAuthService;
use Illuminate\Http\Request;

final class MercadoLivreController extends Controller
{
    public function login()
    {
        $url = 'https://auth.mercadolivre.com.br/authorization?'.
            http_build_query([
                'response_type' => 'code',
                'client_id' => config('services.marketplace.mercadolivre.app_id'),
                'redirect_uri' => config('services.marketplace.mercadolivre.redirect_uri'),
            ]);

        return redirect($url);
    }

    public function callback(Request $request)
    {
        $code = request('code');

        $service = new MercadoLivreAuthService();
        $token = $service->getToken($code);

        return $token;
    }

    public function webhook(Request $request)
    {
        //
    }
}
