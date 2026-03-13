<div class="p-4 rounded-xl space-y-4 shadow bg-gray-900">
    <div class="flex justify-between items-center">
        <div class="space-y-1">
            <div class="text-base font-semibold text-white">
                Status dos Marketplaces
            </div>
            <div class="text-xs text-gray-500">
                Sincronizacao em teitemo real
            </div>
        </div>

        <button
            class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs rounded-md border pointer transition-all text-gray-400 border-gray-700 bg-transparent hover:border-gray-500">
            <x-fas-sync class="h-3 w-3 text-white" />
            Sincronizar
        </button>
    </div>

    <div class="grid md:grid-cols-2 gap-4">
        @foreach($items as $item)
            <div class="p-4 space-y-1.5 rounded-md bg-gray-800 {{ $item[6] ? '' : 'border border-red-500' }}">
                <div class="flex justify-between items-center mb-2">
                    <div class="flex justify-center gap-2">
                        <div class="w-8 h-8 flex justify-center items-center rounded-md text-xs font-bold text-white {{$item[2]}}">
                            {{$item[0]}}
                        </div>

                        <span class="text-md font-medium text-white">
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
                        <span class="text-sm font-bold text-white">
                            {{$item[3]}}
                        </span>
                        <div class="text-xs text-gray-500">
                            Ativos
                        </div>
                    </div>

                    <div>
                        <span class="text-sm font-bold text-white">
                            {{$item[4]}}
                        </span>
                        <div class="text-xs text-gray-500">
                            Sincronizando
                        </div>
                    </div>

                    <div>
                        <span class="text-sm font-bold {{$item[5] > 0 ? 'text-red' : 'text-white'}}">
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

                <a href="#" class="flex items-center gap-1 text-sm pointer hover:underline">
                    Ver detalhes
                    <x-fas-angle-right class="h-3 w-3" />
                </a>
            </div>
        @endforeach
    </div>
</div>