<x-ui.card title="Feed de Atividades" subtitle="Últimas ações do sistema">
    <x-filament::card>
        @foreach($items as $item)
            <div class="flex gap-x-3 p-2 rounded-md">
                <div class="flex justify-center items-center">
                    @switch($item[0])
                        @case('success')
                            <x-elemplus-success-filled class="h-4 w-4 text-green-800" />
                            @break
                        @case('error')
                            <x-gmdi-error class="h-4 w-4 text-red-800" />
                            @break
                        @case('info')
                            <x-eva-info-outline class="h-4 w-4 text-yellow-800" />
                            @break
                        @default
                            <x-fas-sync class="h-3 w-3 text-blue-800" />
                            @break
                    @endswitch
                </div>

                <div class="flex-1">
                    <span class="text-sm truncate">
                        {{ $item[1] }}
                    </span>
                </div>

                <div class="flex justify-end">
                    <x-filament::badge color="gray">
                        {{ $item[2] }}
                    </x-filament::badge>
                </div>
            </div>
        @endforeach
    </x-filament::card>
</x-ui.card>