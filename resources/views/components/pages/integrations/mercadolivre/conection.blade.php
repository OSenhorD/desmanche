<x-filament::card>
    <div class="space-y-1">
        <div class="text-base font-semibold">
            Conexão com Mercado Livre
        </div>
        <div class="text-xs text-gray-500">
            Vincule sua conta para importar anúncios, pedidos e sincronizar estoque
        </div>
    </div>

    <div class="mt-4 space-y-4">
        <div class="flex justify-end">
            <x-filament::badge color="danger">
                <div class="flex items-center gap-1">
                    <x-far-dot-circle class="h-3 w-3 animate-pulse" />
                    Não conectado
                </div>
            </x-filament::badge>
        </div>

        <a href="https://staff-tribe-pichunter-humans.trycloudflare.com/api/v1/integrations/mercadolivre/login"
            target="_blank"
            class="group relative w-full block overflow-hidden rounded-xl border border-[#d4be00] bg-[#ffe600] px-4 py-3.25 text-[13.5px] font-[650] tracking-tight text-black shadow-[inset_0_1px_0_0_rgba(255,255,255,0.45),0_1px_2px_rgba(0,0,0,0.06)] transition-all hover:bg-[#ffea47] active:translate-y-px active:shadow-[inset_0_1px_0_0_rgba(255,255,255,0.35)]">
            <span class="relative z-10 flex items-center justify-center gap-2">
                <x-fas-align-left class="h-4 w-4" />
                Conectar com Mercado Livre
            </span>
            <span
                class="pointer-events-none absolute inset-0 -translate-x-full bg-linear-to-r from-white/0 via-white/40 to-white/0 opacity-0 transition-all duration-700 group-hover:translate-x-full group-hover:opacity-100"></span>
        </a>

        <p class="mt-3 px-3 pb-3 text-xs leading-4 text-zinc-500">
            Ao conectar, você autoriza a leitura e escrita em itens, pedidos, perguntas e estoque. Você pode
            revogar o acesso a qualquer momento.
        </p>
    </div>
</x-filament::card>