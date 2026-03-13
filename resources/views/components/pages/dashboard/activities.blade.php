<div class="p-4 space-y-2 shadow rounded-xl bg-gray-900">
    <div class="space-y-1 pb-2 border-b-2 border-b-[#334155]">
        <div class="text-base font-semibold text-white">
            Feed de Atividades
        </div>

        <div class="text-xs text-gray-500">
            Últimas ações do sistema
        </div>
    </div>

    <div class="space-y-2">
        @foreach($items as $item)
            <div class="flex gap-x-3 p-2 rounded-md">
                <div class="flex justify-center items-center">
                    @switch($item[0])
                        @case('success')
                            <x-elemplus-success-filled class="h-4 w-4 text-green-800" />
                            @break
                        @case('error')
                            <x-gmdi-error class="h-4 w-4 text-red-800" />
                            @break
                        @case('info')
                            <x-eva-info-outline class="h-4 w-4 text-yellow-800" />
                            @break
                        @default
                            <x-fas-sync class="h-3 w-3 text-blue-800" />
                    @endswitch
                </div>

                <div class="flex-1">
                    <span class="text-sm truncate text-white">
                        {{ $item[1] }}
                    </span>
                </div>

                <div class="w-10 flex justify-end">
                    <span class="px-2 py-1 text-xs text-right rounded-md whitespace-nowrap text-gray-500 bg-gray-800">
                        {{ $item[2] }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
</div>