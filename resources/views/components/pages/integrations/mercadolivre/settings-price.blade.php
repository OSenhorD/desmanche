<div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-100">
        <h2 class="text-base font-semibold text-gray-900">
            Configurações de Preço
        </h2>

        <p class="text-sm text-gray-500 mt-0.5">
            Defina regras de precificação para o Mercado Livre
        </p>
    </div>

    <div class="px-6 py-5 space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">
                Markup de Preço (%)
            </label>

            <div class="relative w-full max-w-xs">
                <input type="number"
                    class="w-full px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#FFE600] focus:border-[#FFE600] outline-none transition-all pr-10"
                    :value={{$priceMarkup}} />

                <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                    %
                </span>
            </div>

            <p class="text-xs text-gray-400 mt-1.5">
                Percentual adicionado ao preço base dos produtos
            </p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">
                Arredondamento
            </label>

            <select
                class="w-full max-w-xs px-4 py-2.5 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-[#FFE600] focus:border-[#FFE600] outline-none">
                <option>Sem arredondamento</option>
                <option>Arredondar para R$ X,99</option>
                <option>Arredondar para R$ X,90</option>
                <option>Arredondar para próximo inteiro</option>
            </select>
        </div>
    </div>
</div>