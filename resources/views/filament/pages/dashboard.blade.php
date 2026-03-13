<x-filament-panels::page>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        @foreach($stats as $stat)
            <x-dashboard.stat-card
                :title="$stat['title']"
                :value="$stat['value']"
                :growValue="$stat['growValue']"
                :growColor="$stat['growColor']"
                :iconName="$stat['iconName']"
                :iconColor="$stat['iconColor']"
            />
        @endforeach
    </div>

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-8">
            <div class="flex justify-between items-center p-4 shadow rounded-xl bg-gray-900">
                <div class="space-y-1">
                    <div class="text-base font-semibold text-white">Status dos Marketplaces</div>
                    <div class="text-xs text-gray-500">Sincronizacao em tempo real</div>
                </div>

                <button class="inline-flex items-center gap-3 border px-4 py-2 rounded-md pointer">
                    <x-fas-sync class="h-4 w-4 text-white" />
                    Sincronizar
                </button>
            </div>
        </div>

        <div class="col-span-4">
            <x-dashboard.alert-stock :items="$alerts" />
        </div>
    </div>

    <x-dashboard.activities :items="$activities" />
</x-filament-panels::page>