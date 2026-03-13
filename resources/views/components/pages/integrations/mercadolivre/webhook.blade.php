<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-base font-semibold text-gray-900">
            Webhook
        </h2>

        <p class="text-sm text-gray-500 mt-0.5">
            Configure webhooks para receber atualizações em tempo real
        </p>
    </div>

    <div class="px-6 py-5">
        <div class="flex items-center gap-3 p-4 bg-blue-50 rounded-lg border border-blue-100 mb-4">
            <svg class="w-5 h-5 text-blue-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <p class="text-sm text-blue-700">
                Configure esta URL no painel de desenvolvedor do Mercado Livre para receber notificações de eventos.
            </p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">
                URL do Webhook
            </label>

            <div class="flex gap-2">
                <input type="text"
                    class="flex-1 px-4 py-2.5 border border-gray-300 rounded-lg text-sm bg-gray-50 text-gray-500"
                    defaultValue="https://seusite.com.br/api/webhooks/mercadolivre" readOnly />

                <button
                    class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg text-sm font-medium transition-colors">
                    Copiar
                </button>
            </div>
        </div>
    </div>
</div>