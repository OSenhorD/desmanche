<div class="rounded-2xl border border-zinc-200 bg-white">
    <div class="flex items-baseline justify-between px-5 py-4 border-b border-zinc-100">
        <div>
            <h3 class="text-[15px] font-semibold tracking-tight text-zinc-900">
                Credenciais da aplicação
            </h3>

            <p class="mt-1 text-xs text-zinc-500">
                Localize estes dados no painel de desenvolvedores do Mercado Livre.
            </p>
        </div>

        <span
            class="rounded-md border px-2 py-1 text-xs font-mono tracking-wider text-zinc-700 border-zinc-200 bg-zinc-50">
            APP
        </span>
    </div>

    <div class="space-y-5 p-5">
        <label class="block">
            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-widest text-zinc-700">
                App ID (client_id)
            </span>

            <div class="relative">
                <input
                    class="peer w-full rounded-xl border border-zinc-300 bg-zinc-50/50 px-4 py-3.25 font-mono text-sm tracking-wider text-zinc-900 placeholder-zinc-400 outline-none transition-all focus:border-[#ffe600] focus:bg-white focus:ring-[6px] focus:ring-[#ffe600]/25"
                    placeholder="1234567890123456" inputMode="numeric" />

                <span
                    class="pointer-events-none absolute right-3 top-1/2 hidden -translate-y-1/2 rounded-md bg-emerald-50 px-1.5 py-1 text-[9.5px] font-bold uppercase tracking-widest text-emerald-700 ring-1 ring-emerald-200 peer-[.is-valid]:block">
                    OK
                </span>
            </div>

            <p class="mt-1.5 text-[11px] text-zinc-500">
                Identificador público da sua aplicação.
            </p>
        </label>

        <label class="block">
            <span class="mb-1.5 block text-xs font-semibold uppercase tracking-widest text-zinc-700">
                Secret Key (client_secret)
            </span>

            <div class="relative">
                <input type="password"
                    class="w-full rounded-xl border border-zinc-300 bg-zinc-50/50 px-4 py-3.25 font-mono text-sm tracking-wider text-zinc-900 placeholder-zinc-400 outline-none transition-all focus:border-zinc-400 focus:bg-white focus:ring-[6px] focus:ring-zinc-200/60"
                    placeholder="••••••••••••••••••••••••••••••••" />
                <button type="button"
                    class="absolute right-2.5 top-1/2 -translate-y-1/2 rounded-lg border border-zinc-200 bg-white px-2.5 py-1.5 text-[10.5px] font-semibold tracking-wide text-zinc-700 shadow-sm hover:bg-zinc-50">
                    Mostrar
                </button>
            </div>

            <p class="mt-1.5 text-[11px] text-zinc-500">
                Mantenha esta chave em sigilo. Não compartilhe em canais públicos.
            </p>
        </label>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-[1fr_auto]">
            <label class="block">
                <span class="mb-1.5 block text-xs font-semibold uppercase tracking-widest text-zinc-700">
                    Redirect URI
                </span>

                <input
                    class="w-full rounded-xl border border-zinc-300 bg-white px-4 py-3.25 font-mono text-[12.5px] tracking-wide text-zinc-800 outline-none focus:border-[#ffe600] focus:ring-[6px] focus:ring-[#ffe600]/20"
                    defaultValue="https://seu-dominio.com/integracoes/mercado-livre/callback" readOnly />
            </label>

            <div class="flex items-end">
                <button
                    class="h-11.5 rounded-xl border border-zinc-300 bg-white px-4 text-[12.5px] font-semibold text-zinc-800 shadow-sm hover:bg-zinc-50">
                    Copiar
                </button>
            </div>
        </div>
    </div>
</div>