<x-ui.card title="Status dos Marketplaces" subtitle="Sincronizacao em tempo real">
    <x-slot:headerRight>
        <x-filament::button>
            <x-fas-sync class="h-3 w-3" />
            Sincronizar
        </x-filament::button>
    </x-slot:headerRight>

    <div class="grid md:grid-cols-2 gap-4">
        @foreach($items as $item)
            <x-filament::card>
                <div class="space-y-4">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex justify-center gap-2">
                            <div class="w-8 h-8 flex justify-center items-center rounded-md text-xs font-bold {{$item[2]}}">
                                {{$item[0]}}
                            </div>

                            <span class="text-md font-medium">
                                {{$item[1]}}
                            </span>
                        </div>

                        @if ($item[6])
                            <x-elemplus-success-filled class="h-4 w-4 text-green-800" />
                        @else
                            <x-gmdi-error class="h-4 w-4 text-red-800" />
                        @endif
                    </div>

                    <div class="grid grid-cols-3 gap-1 text-center">
                        <div>
                            <span class="text-sm font-bold">
                                {{$item[3]}}
                            </span>
                            <div class="text-xs text-gray-500">
                                Ativos
                            </div>
                        </div>

                        <div>
                            <span class="text-sm font-bold">
                                {{$item[4]}}
                            </span>
                            <div class="text-xs text-gray-500">
                                Sincronizando
                            </div>
                        </div>

                        <div>
                            <span class="text-sm font-bold {{$item[5] > 0 ? 'text-red-500' : ''}}">
                                {{$item[5]}}
                            </span>
                            <div class="text-xs text-gray-500">
                                Erros
                            </div>
                        </div>
                    </div>

                    <div class="flex items-end gap-1 h-8">
                        @for($i = 0; $i < 7; $i++)
                            <div class="flex-1 rounded-md w-1 bg-cyan-500" style="height: {{ rand(40, 90) }}%"></div>
                        @endfor
                    </div>

                    <div>
                        <a href="#" class="flex items-center gap-1 text-xs pointer hover:underline">
                            Ver detalhes
                            <x-fas-angle-right class="h-3 w-3" />
                        </a>
                    </div>
                </div>
            </x-filament::card>
        @endforeach
    </div>
</x-ui.card>