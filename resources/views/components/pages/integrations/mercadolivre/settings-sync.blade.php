<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-base font-semibold text-gray-900">
            Sincronização
        </h2>

        <p class="text-sm text-gray-500 mt-0.5">
            Configure o que será sincronizado automaticamente
        </p>
    </div>

    <div class="divide-y divide-gray-100">
        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Sincronização Automática
                </p>

                <p class="text-sm text-gray-500">
                    Sincronizar dados automaticamente em intervalos regulares
                </p>
            </div>

            <button
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors {{ $autoSync ? 'bg-[#2D3277]' : 'bg-gray-200' }}">
                <span
                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $autoSync ? 'translate-x-6' : 'translate-x-1' }}">
                </span>
            </button>
        </div>

        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Intervalo de Sincronização
                </p>
                <p class="text-sm text-gray-500">
                    Frequência da sincronização automática
                </p>
            </div>

            <select
                class="px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#FFE600] focus:border-[#FFE600] outline-none"
                value={{$syncInterval}}>
                <option value="5">A cada 5 minutos</option>
                <option value="15">A cada 15 minutos</option>
                <option value="30">A cada 30 minutos</option>
                <option value="60">A cada 1 hora</option>
            </select>
        </div>

        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Sincronizar Estoque
                </p>

                <p class="text-sm text-gray-500">
                    Manter estoque atualizado entre as plataformas
                </p>
            </div>

            <button
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors {{ $syncStock ? 'bg-[#2D3277]' : 'bg-gray-200' }}">
                <span
                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $syncStock ? 'translate-x-6' : 'translate-x-1' }}">
                </span>
            </button>
        </div>

        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Sincronizar Preços
                </p>

                <p class="text-sm text-gray-500">
                    Atualizar preços automaticamente no Mercado Livre
                </p>
            </div>

            <button
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors {{ $syncPrices ? 'bg-[#2D3277]' : 'bg-gray-200' }}">
                <span
                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $syncPrices ? 'translate-x-6' : 'translate-x-1' }}">
                </span>
            </button>
        </div>

        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Sincronizar Pedidos
                </p>

                <p class="text-sm text-gray-500">
                    Importar pedidos do Mercado Livre automaticamente
                </p>
            </div>

            <button
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors {{ $syncOrders ? 'bg-[#2D3277]' : 'bg-gray-200' }}">
                <span
                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $syncOrders ? 'translate-x-6' : 'translate-x-1' }}">
                </span>
            </button>
        </div>
    </div>
</div>