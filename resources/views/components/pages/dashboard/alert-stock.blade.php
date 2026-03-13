<div class="p-4 space-y-2 shadow rounded-xl bg-gray-900">
    <div class="flex justify-between items-center">
        <span class="text-lg font-semibold text-white">
            Alertas de Estoque
        </span>

        <x-ui.badge
            type="error"
            icon="heroicon-s-bell-alert"
            >
            {{ count($items) }} itens
        </x-ui.badge>
    </div>

    @foreach($items as $item)
        <div class="grid grid-cols-12 gap-x-3 p-2 rounded-md bg-gray-800">
            <div class="col-span-1">
                <x-ri-alert-fill class="mt-1 h-4 w-4 text-red-500" />
            </div>

            <div class="col-span-7">
                <div class="text-sm truncate text-white">
                    {{ $item[0] }}
                </div>
                <div class="text-xs text-gray-500">
                    {{ $item[1] }}
                </div>
            </div>

            <div class="col-span-4">
                <span class="px-2 py-1 text-xs rounded-md whitespace-nowrap text-gray-500 bg-gray-800">
                    {{ $item[2] }}
                </span>
            </div>
        </div>
    @endforeach
</div>
