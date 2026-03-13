<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-base font-semibold text-gray-900">
            Status da Sincronização</h2>
        <p class="text-sm text-gray-500 mt-0.5">
            Informações sobre a última sincronização realizada</p>
    </div>

    <div class="px-6 py-5">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="p-4 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 uppercase tracking-wide font-medium">
                    Última Sincronização
                </p>
                <p class="text-lg font-semibold text-gray-900 mt-1">
                    Há 5 minutos
                </p>
                <p class="text-xs text-gray-400">
                    15/01/2024 às 15:42
                </p>
            </div>

            <div class="p-4 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 uppercase tracking-wide font-medium">
                    Produtos Sincronizados
                </p>
                <p class="text-lg font-semibold text-gray-900 mt-1">
                    1.234
                </p>
                <p class="text-xs text-green-600">
                    +12 novos hoje
                </p>
            </div>

            <div class="p-4 bg-gray-50 rounded-lg">
                <p class="text-xs text-gray-500 uppercase tracking-wide font-medium">
                    Pedidos Importados
                </p>
                <p class="text-lg font-semibold text-gray-900 mt-1">
                    847
                </p>
                <p class="text-xs text-green-600">
                    +23 novos hoje
                </p>
            </div>
        </div>

        <div class="mt-4 flex gap-3">
            <button
                class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#2D3277] hover:bg-[#232861] text-white font-medium rounded-lg transition-colors text-sm">
                <x-fas-sync class="h-3 w-3 text-white" />
                Sincronizar Agora
            </button>

            <button
                class="px-4 py-2.5 border border-gray-300 hover:bg-gray-50 text-gray-700 font-medium rounded-lg transition-colors text-sm">
                Ver Histórico
            </button>
        </div>
    </div>
</div>