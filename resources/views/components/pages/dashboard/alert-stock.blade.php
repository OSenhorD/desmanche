<x-ui.card title="Alertas de Estoque" subtitle="Últimos alertas encontrados">
    <x-slot:headerRight>
        <x-filament::badge color="danger">
            {{ count($items) }} itens
        </x-filament::badge>
    </x-slot:headerRight>

    @foreach($items as $item)
        <x-filament::card>
            <div class="grid grid-cols-12 gap-x-3 rounded-md">
                <div class="col-span-1">
                    <x-ri-alert-fill class="mt-1 h-4 w-4 text-red-500" />
                </div>

                <div class="col-span-7">
                    <div class="text-sm truncate">
                        {{ $item[0] }}
                    </div>
                    <div class="text-xs text-gray-500">
                        {{ $item[1] }}
                    </div>
                </div>

                <div class="col-span-4">
                    <x-filament::badge color="gray">
                        {{ $item[2] }}
                    </x-filament::badge>
                </div>
            </div>
        </x-filament::card>
    @endforeach
</x-ui.card>