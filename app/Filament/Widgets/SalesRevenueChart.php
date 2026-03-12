<?php

declare(strict_types=1);

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

final class SalesRevenueChart extends ChartWidget
{
    protected ?string $maxHeight = '300px';

    // Adicione esta linha para esconder da dashboard padrão
    protected static bool $isDiscovered = false;

    public static function getTitle(): ?string
    {
        return 'Vendas em Tempo Real';
    }

    protected function getData(): array
    {
        $hours = [];
        $revenue = [];

        for ($i = 12; $i >= 0; $i--) {
            $time = Carbon::now()->subHours($i);
            $hours[] = $time->format('H:i');
            $revenue[] = rand(800, 1400);
        }

        return [
            'datasets' => [
                [
                    'label' => 'Receita (R$)',
                    'data' => $revenue,
                    'borderColor' => '#3b82f6',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.1)',
                    'tension' => 0.3,
                    'fill' => true,
                    'pointBackgroundColor' => '#3b82f6',
                    'pointBorderColor' => '#1e293b',
                    'pointBorderWidth' => 2,
                    'pointRadius' => 4,
                    'pointHoverRadius' => 6,
                ],
            ],
            'labels' => $hours,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'display' => false,
                ],
                'tooltip' => [
                    'enabled' => true,
                    'backgroundColor' => '#0f172a',
                    'titleColor' => '#3b82f6',
                    'bodyColor' => '#9ca3af',
                    'borderColor' => '#3b82f6',
                    'borderWidth' => 1,
                    'padding' => 12,
                    'displayColors' => false,
                ],
            ],
            'scales' => [
                'x' => [
                    'grid' => [
                        'color' => '#334155',
                    ],
                    'ticks' => [
                        'color' => '#9ca3af',
                    ],
                ],
                'y' => [
                    'grid' => [
                        'color' => '#334155',
                    ],
                    'ticks' => [
                        'color' => '#9ca3af',
                    ],
                ],
            ],
        ];
    }
}
