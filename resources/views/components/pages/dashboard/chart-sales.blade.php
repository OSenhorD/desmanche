<div>
    <div class="flex justify-between items-center mb-3">
        <div class="space-y-1">
            <div class="text-base font-semibold">
                Vendas em Tempo Real
            </div>

            <div class="text-xs text-gray-500">
                Ultimas 24 horas
            </div>
        </div>

        <x-filament::badge>
            <div class="flex items-center gap-1">
                <x-far-dot-circle class="h-3 w-3 animate-pulse" />
                Ao Vivo
            </div>
        </x-filament::badge>
    </div>

    @livewire(\App\Filament\Widgets\SalesRevenueChart::class)
</div>