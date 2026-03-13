<div>
    <div class="flex justify-between items-center mb-3">
        <div class="space-y-1">
            <div class="text-base font-semibold text-white">
                Vendas em Tempo Real
            </div>

            <div class="text-xs text-gray-500">
                Ultimas 24 horas
            </div>
        </div>

        <x-ui.badge
            class="animate-pulse"
            type="success"
            icon="far-dot-circle"
            >
            Ao Vivo
        </x-ui.badge>
    </div>

    @livewire(\App\Filament\Widgets\SalesRevenueChart::class)
</div>