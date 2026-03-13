<x-ui.card title="Vendas por Categoria" subtitle="Este mês">
    <div class="flex flex-col items-center justify-between flex-1 h-full space-y-3">
        <svg class="w-50 h-50" viewBox="0 0 200 200">
            <circle cx="100" cy="100" r="70" fill="none" stroke="#3b82f6" stroke-width="24"
                stroke-dasharray="140.74 439.82" stroke-dashoffset="0" transform="rotate(-90 100 100)" />
            <circle cx="100" cy="100" r="70" fill="none" stroke="#22c55e" stroke-width="24"
                stroke-dasharray="96.76 439.82" stroke-dashoffset="-140.74" transform="rotate(-90 100 100)" />
            <circle cx="100" cy="100" r="70" fill="none" stroke="#f97316" stroke-width="24"
                stroke-dasharray="79.17 439.82" stroke-dashoffset="-237.50" transform="rotate(-90 100 100)" />
            <circle cx="100" cy="100" r="70" fill="none" stroke="#a855f7" stroke-width="24"
                stroke-dasharray="65.97 439.82" stroke-dashoffset="-316.67" transform="rotate(-90 100 100)" />
            <circle cx="100" cy="100" r="70" fill="none" stroke="#6b7280" stroke-width="24"
                stroke-dasharray="57.18 439.82" stroke-dashoffset="-382.64" transform="rotate(-90 100 100)" />
            <circle cx="100" cy="100" r="50" fill="#1e293b" />
        </svg>

        <div class="w-full flex flex-col justify-center flex-wrap gap-x-2 gap-y-3 text-xs">
            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-md" style="background:#3b82f6"></div>
                <span class="text-white">Motor (32%)</span>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-md" style="background:#22c55e"></div>
                <span class="text-white">Suspensao (22%)</span>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-md" style="background:#f97316"></div>
                <span class="text-white">Freios (18%)</span>
            </div>

            <div class="flex items-center gap-2">
                <div class="w-2 h-2 rounded-md" style="background:#a855f7"></div>
                <span class="text-white">Eletrica (15%)</span>
            </div>
        </div>
    </div>
</x-ui.card>