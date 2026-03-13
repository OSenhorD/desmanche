<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-base font-semibold text-gray-900">
            Notificações
        </h2>
        <p class="text-sm text-gray-500 mt-0.5">
            Configure alertas e notificações da integração
        </p>
    </div>

    <div class="divide-y divide-gray-100">
        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Notificar novos pedidos
                </p>
                <p class="text-sm text-gray-500">
                    Receber alerta quando houver novo pedido
                </p>
            </div>

            <button
                class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors {{ $notifications ? 'bg-[#2D3277]' : 'bg-gray-200' }}">
                <span
                    class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform {{ $notifications ? 'translate-x-6' : 'translate-x-1' }}">
                </span>
            </button>
        </div>
        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Alertas de estoque baixo
                </p>
                <p class="text-sm text-gray-500">
                    Notificar quando estoque estiver abaixo do mínimo
                </p>
            </div>

            <button class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors bg-[#2D3277]">
                <span class="inline-block h-4 w-4 transform rounded-full bg-white translate-x-6" />
            </button>
        </div>

        <div class="px-6 py-4 flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-gray-900">
                    Erros de sincronização
                </p>
                <p class="text-sm text-gray-500">
                    Receber alerta em caso de falha na sincronização
                </p>
            </div>

            <button class="relative inline-flex h-6 w-11 items-center rounded-full transition-colors bg-[#2D3277]">
                <span class="inline-block h-4 w-4 transform rounded-full bg-white translate-x-6" />
            </button>
        </div>
    </div>
</div>