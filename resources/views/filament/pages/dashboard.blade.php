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
            <x-dashboard.chart-sales />
        </div>

        <div class="col-span-4">
            <x-dashboard.chart-pie-categories />
        </div>
    </div>

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-8">
            <x-dashboard.marketplaces-status :items="$marketplacesStatus" />
        </div>

        <div class="col-span-4">
            <x-dashboard.alert-stock :items="$alerts" />
        </div>
    </div>

    <x-dashboard.activities :items="$activities" />
</x-filament-panels::page>