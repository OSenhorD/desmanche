<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

final class Dashboard extends Page
{
    public array $stats = [];

    public array $alerts = [];

    public array $activities = [];

    protected string $view = 'filament.pages.dashboard';

    protected static ?string $title = 'Dashboard';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Home;

    protected static ?int $navigationSort = -2;

    public function mount(): void
    {
        $this->stats = $this->getStats();
        $this->alerts = $this->getAlerts();
        $this->activities = $this->getActivities();
    }

    public function getStats(): array
    {
        return [
            [
                'title' => 'Receita Hoje',
                'value' => 'R$ 4.280',
                'growValue' => '+12% vs ontem',
                'growColor' => 'text-green-500',
                'iconName' => 'heroicon-o-currency-dollar',
                'iconColor' => 'text-green-500',
            ],
            [
                'title' => 'Peças Vendidas',
                'value' => '38',
                'growValue' => '+5 vs ontem',
                'growColor' => 'text-blue-500',
                'iconName' => 'heroicon-o-shopping-cart',
                'iconColor' => 'text-blue-500',
            ],
            [
                'title' => 'Itens em Estoque',
                'value' => '1.847',
                'growValue' => '-3 hoje',
                'growColor' => 'text-red-500',
                'iconName' => 'heroicon-o-archive-box',
                'iconColor' => 'text-red-500',
            ],
            [
                'title' => 'Ticket Medio',
                'value' => 'R$ 112,63',
                'growValue' => '+8% vs semana',
                'growColor' => 'text-green-500',
                'iconName' => 'heroicon-o-arrow-trending-up',
                'iconColor' => 'text-green-500',
            ],
        ];
    }

    public function getAlerts(): array
    {
        return [
            ['Motor Omega 2.2 1999', 'Estoque: 1 (min. 2)', 'MOS-2019-01'],
            ['Freio Dianteiro Uno 2015', 'Estoque: 0 (min. 3)', 'FRT-UNO-15'],
            ['Mola Corsa 2012', 'Parada ha 45 dias', 'SUS-COR-12'],
            ['Alternador Gol 2017', 'Parada ha 38 dias', 'ALT-GOL-17'],
        ];
    }

    public function getActivities(): array
    {
        return [
            ['success', 'Motor Gol 1.0 2020 publicado no Mercado Livre', '2 min atras'],
            ['info', 'Preco do Radiador Civic 2018 atualizado para R$ 340,00', '16 min atras'],
            ['sync', 'Sincronizacao com Shopee concluida (156 itens)', '32 min atras'],
            ['error', 'Falha na publicacao: Alternador Corsa (OLX)', '1h atras'],
            ['success', 'Bomba D\'agua Palio 2015 publicada em 2 canais', '1h 20min atras'],
            ['sync', 'Sincronizacao com Mercado Livre concluida (284 itens)', '2h atras'],
        ];
    }
}
